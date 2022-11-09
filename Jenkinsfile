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
        GIT_DIFF_BASE_COMMIT = sh(
            returnStdout: true,
            script: "echo ${env.GIT_PREVIOUS_SUCCESSFUL_COMMIT ?: '`git rev-list HEAD | tail -n 1`'}"
        ).trim()
        GIT_DIFF_API = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- api || echo 'all'"
        ).trim()
        GIT_DIFF_REACT = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- react || echo 'all'"
        ).trim()
        GIT_DIFF_HERMAN = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- herman || echo 'all'"
        ).trim()
        GIT_DIFF_VLAD = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- vlad || echo 'all'"
        ).trim()
        GIT_DIFF_DIM = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- dim || echo 'all'"
        ).trim()
        GIT_DIFF_UNDERDANTE = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- underdante || echo 'all'"
        ).trim()
        GIT_DIFF_VUE = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- vue || echo 'all'"
        ).trim()
        GIT_DIFF_E2E = sh(
            returnStdout: true,
            script: "git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- e2e || echo 'all'"
        ).trim()
        GIT_DIFF_ROOT = sh(
            returnStdout: true,
            script: "{ git diff --name-only ${env.GIT_DIFF_BASE_COMMIT} HEAD -- . || echo 'all'; } | { grep -v / - || true; }"
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
                sh 'touch .docker-images-before'              
                sh 'make init-ci'
                sh 'docker compose images > .docker-images-after'
                script {
                    DOCKER_DIFF = sh(
                        returnStdout: true,
                        script: 'diff .docker-images-before .docker-images-after || true'
                    ).trim()
                }
            }
        }
        stage('Lint') {
            parallel {
                stage('API') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_API }
                    }
                    steps {
                        sh 'make api-lint'
                    }
                }
                stage('Herman') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_HERMAN }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-lint'
                        }
                    }
                }
                stage('Underdante') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_UNDERDANTE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-lint'
                        }
                    }
                }
                stage('Vue') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_VUE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make vue-lint'
                        }
                    }
                }
                stage('Vlad') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_VLAD }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
                        }
                    }
                }
                stage('Dim') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_DIM }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
                        }
                    }
                }
                stage('Cucumber') {
                    when {
                        expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_E2E }
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
                expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_API }
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
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_API }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make api-test'
                        }
                    }
                }
                stage('Herman') {
                    when {
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_UNDERDANTE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
                        }
                    }
                }
                stage('Underdante') {
                    when {
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_UNDERDANTE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'make underdante-test'
                        }
                    }
                }
                stage('Vlad') {
                    when {
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_VLAD }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
                        }
                    }
                }
                stage('Dim') {
                    when {
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_DIM }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
                        }
                    }
                }
                stage('Vue') {
                    when {
                       expression { return DOCKER_DIFF || env.GIT_DIFF_ROOT || env.GIT_DIFF_VUE }
                    }
                    steps {
                        catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                            sh 'sleep 1'
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
            environment {
                MINIO_SECRET_ACCESS_KEY = credentials("MINIO_PASSWORD")
                DB_PASSWORD = credentials("API_DB_PASSWORD")
            }
            steps {
                sh 'docker compose run --rm api-php-cli composer install --no-dev --prefer-dist --no-progress --optimize-autoloader --ignore-platform-req=ext-gd'
                sh 'echo MINIO_SECRET_ACCESS_KEY=${MINIO_SECRET_ACCESS_KEY} >> .env'
                sh 'echo DB_PASSWORD=${DB_PASSWORD} >> .env'
                sh 'make build'
            }
        }
        stage('Testing') {
            stages {
                stage('Build') {
                    steps {
                        sh 'sleep 1'
                    }
                }
                stage('Init') {
                    steps {
                        sh 'sleep 1'
                    }
                }
                stage('Smoke') {
                    steps {
                        sh 'sleep 1'
                    }
                    post {
                        failure {
                            archiveArtifacts 'e2e/var/*'
                        }
                    }
                }
                stage('E2E') {
                    parallel {
                        stage('Herman') {
                            steps {
                                sh 'sleep 1'
                            }
                        }
                        stage('Vue') {
                            steps {
                                sh 'sleep 1'
                            }
                        }
                        stage('Underdante') {
                            steps {
                                sh 'sleep 1'
                            }
                        }
                        stage('Vlad') {
                            steps {
                                sh 'sleep 1'
                            }
                        }
                        stage('Dim') {
                            steps {
                                sh 'sleep 1'
                            }
                        }
                    }
                }
                stage('Down') {
                    steps {
                        sh 'sleep 1'
                    }
                }
            }
        }
        stage('Push') {
            when {
                branch 'master'
            }
            steps {
                withCredentials([
                    usernamePassword(
                        credentialsId: 'REGISTRY_AUTH',
                        usernameVariable: 'USER',
                        passwordVariable: 'PASSWORD'
                    )
                ]) {
                    sh 'docker login -u=$USER -p=$PASSWORD $REGISTRY'
                }
                sh 'make push'
            }
        }
        stage ('Prod') {
            when {
                branch 'master'
            }
            steps {
                withCredentials([
                    string(credentialsId: 'PRODUCTION_HOST', variable: 'HOST'),
                    string(credentialsId: 'PRODUCTION_PORT', variable: 'PORT'),
                    file(credentialsId: 'API_DB_PASSWORD_FILE', variable: 'API_DB_PASSWORD_FILE'),
                ]) {
                    sshagent (credentials: ['PRODUCTION_AUTH']) {
                        sh 'make deploy'
                    }
                }
            }
        }

    }
    post {
        always {
            sh 'make docker-down-clear || true'
            sh 'make deploy-clean || true'
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
            sh 'mv -f .docker-images-after .docker-images-before'
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
