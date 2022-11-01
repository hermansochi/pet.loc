pipeline {
    agent any
    options {
        timestamps()
    }
    environment {
        CI = 'true'
    }
    stages {
        stage('Init') {
            steps {
                withCredentials([string(credentialsId: 'telegramToken', variable: 'TOKEN'), string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')]) {
                    sh  ("""
                        curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='Branch ${env.GIT_BRANCH} changed. Build start. Please go to ${BUILD_URL} and verify the build. Start by ${env.BUILD_USER_ID}.'
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
                        sh 'make react-lint'
                    }
                }
                stage('Underdante') {
                    steps {
                        sh 'make underdante-lint'
                    }
                }
                stage('Vue') {
                    steps {
                        sh 'make vue-lint'
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
