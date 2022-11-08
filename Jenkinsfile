pipeline {
    agent any
    options {
        timestamps()
    }
    environment {
        CI = 'true'
        REGISTRY = credentials('REGISTRY')
        IMAGE_TAG = sh(
            returnStdout: true,
            script: "echo '${env.BUILD_TAG}' | sed 's/%2F/-/g'"
        ).trim()
        GIT_DIFF_API = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT} HEAD -- api"
        ).trim()
        GIT_DIFF_REACT = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT} HEAD -- react"
        ).trim()
        GIT_DIFF_UNDERDANTE = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT} HEAD -- underdante"
        ).trim()
        GIT_DIFF_VUE = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT} HEAD -- vue"
        ).trim()
        GIT_DIFF_E2E = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT} HEAD -- e2e"
        ).trim()

    }
    stages {
        stage('Init') {
            steps {
                withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                    sh  ("""
                        curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='Branch ${env.GIT_BRANCH} changed. Build start. Please go to ${BUILD_URL} and verify the build.'
                    """)
                }
                sh 'make init-ci'
            }
        }
        stage('Lint') {
            parallel {
                stage('API') {
                    when {
                        expression { return env.GIT_DIFF_API }
                    }
                    steps {
                        sh 'make api-lint'
                    }
                }
                stage('React') {
                    when {
                        expression { return env.GIT_DIFF_REACT }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make react-lint'
                        }
                    }
                }
                stage('Underdante') {
                    when {
                        expression { return env.GIT_DIFF_UNDERDANTE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-lint'
                        }
                    }
                }
                stage('Vue') {
                    when {
                        expression { return env.GIT_DIFF_VUE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make vue-lint'
                        }
                    }
                }
                stage('Cucumber') {
                    when {
                        expression { return env.GIT_DIFF_E2E }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make e2e-lint'
                        }
                    }
                }
            }
        }
        stage('Analyze') {
            when {
                expression { return env.GIT_DIFF_API }
            }
            steps {
                catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                    sh 'make api-analyze'
                }
            }
        }
        stage('Test') {
            parallel {
                stage('API') {
                    when {
                       expression { return env.GIT_DIFF_API }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make api-test'
                        }
                    }
                }
                stage('React') {
                    when {
                       expression { return env.GIT_DIFF_REACT }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make react-test'
                        }
                    }
                }
                stage('Underdante') {
                    when {
                       expression { return env.GIT_DIFF_UNDERDANTE }
                    }
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

    }
    post {
        always {
            sh 'make docker-down-clear || true'
            script {
                if (getContext(hudson.FilePath)) {
                    deleteDir()
                }
            }
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
