pipeline {
    agent any
    options {
        timestamps()
    }
    environment {
        CI = 'true'
        REGISTRY = credentials('REGESTRY')
        IMAGE_TAG = sh(returnStdout: true, script: "echo '${env.BUILD_TAG}' | sed 's/%2F/-/g'").trim()
    }
    stages {
        stage('Init') {
            steps {
                withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                    sh  ("""
                        curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='Branch ${env.GIT_BRANCH} changed. Build start. Please go to ${BUILD_URL} and verify the build.'
                    """)
                }
                sh 'make init'
            }
        }
        stage('Lint') {
            parallel {
                stage('API') {
                    steps {
                        sh 'make api-lint'
                    }
                }
                stage('React') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make react-lint'
                        }
                    }
                }
                stage('Underdante') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-lint'
                        }
                    }
                }
                stage('Vue') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make vue-lint'
                        }
                    }
                }
                stage('Cucumber') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make e2e-lint'
                        }
                    }
                }
            }
        }
        stage('Analyze') {
            steps {
                catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                    sh 'make api-analyze'
                }
            }
        }
        stage('Test') {
            parallel {
                stage('API') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make api-test'
                        }
                    }
                }
                stage('React') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make react-test'
                        }
                    }
                }
                stage('Underdante') {
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-test'
                        }
                    }
                }
            }
        }
        stage('Down') {
            steps {
                sh 'make docker-down-clear'
            }
        }
        stage('Build') {
            steps {
                sh 'make build'
            }
        }
    }
    post {
        always {
         sh 'make docker-down-clear || true'
        }
        success {
            withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                sh  ("""
                  curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='Build #${env.BUILD_NUMBER} *${env.JOB_NAME}* : POC *Branch*: ${env.GIT_BRANCH} *Build* : OK.'
                """)
            }
        }
        aborted {
                withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                sh  ("""
                    curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='*${env.JOB_NAME}* : POC *Branch*: ${env.GIT_BRANCH} *Build* : `Aborted`'
                """)
            }
        }
        failure {
            withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                sh  ("""
                   curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='*${env.JOB_NAME}* : POC  *Branch*: ${env.GIT_BRANCH} *Build* : `not OK`'
                """)
            }
        }
    }
}
