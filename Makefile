init: docker-down-clear \
	react-clear vue-clear underdante-clear \
	docker-pull docker-build docker-up \
	api-init react-init underdante-init vue-init

init-andrey: docker-down-clear \
	react-clear \
	docker-pull docker-build docker-up \
	api-init react-init

init-ann: docker-down-clear \
	vue-clear \
	docker-pull docker-build docker-up \
	api-init vue-init

init-underdante: docker-down-clear \
	underdante-clear \
	docker-pull docker-build docker-up \
	api-init underdante-init

up: docker-up
down: docker-down
restart: down up
lint: react-lint vue-lint
lint-fix: react-lint-fix

memory:
	sudo sh -c "echo 3 > /proc/sys/vm/drop_caches"

docker-up:
	docker compose up -d

docker-down:
	docker compose down --remove-orphans

docker-down-clear:
	docker compose down -v --remove-orphans

docker-pull:
	docker compose pull

docker-build:
	docker compose build --pull

api-init: api-permissions api-composer-install api-wait-db api-migrations api-fixtures api-generate-docs

api-permissions:
	docker run --rm -v ${PWD}/api:/app -w /app alpine chmod -R 777 storage bootstrap

api-composer-install:
	docker compose run --rm api-php-cli composer install

api-tests:
	docker compose run --rm api-php-cli php artisan test

api-tests-coverage:
	docker compose run --rm api-php-cli vendor/bin/phpunit --coverage-html reports/

api-psalm:
	docker compose run --rm api-php-cli ./vendor/bin/psalm --show-info=true

api-wait-db:
	docker compose run --rm api-php-cli wait-for-it api-postgres:5432 -t 30

api-migrations:
	docker compose run --rm api-php-cli php artisan migrate:fresh

api-fixtures:
	docker compose run --rm api-php-cli php artisan storage:link
	docker compose run --rm api-php-cli php artisan db:seed
	docker compose run --rm api-php-cli php artisan avatar:add

api-generate-docs:
	mkdir -p ${PWD}/api/.scribe/endpoints/ && cp ${PWD}/docs/scribe/* ${PWD}/api/.scribe/endpoints/ 
	docker compose run --rm api-php-cli php artisan scribe:generate

react-clear:
	docker run --rm -v ${PWD}/react:/app -w /app alpine sh -c 'rm -rf .ready build'

underdante-clear:
	docker run --rm -v ${PWD}/underdante:/app -w /app alpine sh -c 'rm -rf .ready build'

vue-clear:
	docker run --rm -v ${PWD}/vue:/app -w /app alpine sh -c 'rm -rf .ready dist'

react-init: react-yarn-install react-ready 

underdante-init: underdante-yarn-install underdante-ready

vue-init: vue-npm-install vue-ready

react-yarn-install:
	docker compose run --rm react-node-cli yarn install

underdante-yarn-install:
	docker compose run --rm underdante-node-cli yarn install

vue-npm-install:
	docker compose run --rm vue-node-cli npm install

react-ready:
	docker run --rm -v ${PWD}/react:/app -w /app alpine touch .ready

underdante-ready:
	docker run --rm -v ${PWD}/underdante:/app -w /app alpine touch .ready

vue-ready:
	docker run --rm -v ${PWD}/vue:/app -w /app alpine touch .ready

api-lint:
	docker compose run --rm api-php-cli ./vendor/bin/pint

react-lint:
	docker compose run --rm react-node-cli yarn eslint
	docker compose run --rm react-node-cli yarn stylelint

react-lint-fix:
	docker compose run --rm react-node-cli yarn eslint-fix

react-test-watch:
	docker compose run --rm react-node-cli yarn test

react-test:
	docker compose run --rm react-node-cli yarn test --watchAll=false

underdante-lint:
	docker compose run --rm underdante-node-cli yarn eslint
	docker compose run --rm underdante-node-cli yarn stylelint

underdante-lint-fix:
	docker compose run --rm underdante-node-cli yarn eslint-fix

underdante-test-watch:
	docker compose run --rm underdante-node-cli yarn test

underdante-test:
	docker compose run --rm underdante-node-cli yarn test --watchAll=false

vue-lint:
	docker compose run --rm vue-node-cli npm run lint

build: build-api build-frontend

build-frontend:
	docker --log-level=debug build --pull --file=react/docker/production/nginx/Dockerfile --tag=${REGISTRY}/pet-react:${IMAGE_TAG} react

build-api:
	docker --log-level=debug build --pull --file=api/docker/production/nginx/Dockerfile --tag=${REGISTRY}/pet-api:${IMAGE_TAG} api
	docker --log-level=debug build --pull --file=api/docker/production/php-fpm/Dockerfile --tag=${REGISTRY}/pet-api-php-fpm:${IMAGE_TAG} api
	docker --log-level=debug build --pull --file=api/docker/production/php-cli/Dockerfile --tag=${REGISTRY}/pet-api-php-cli:${IMAGE_TAG} api

try-build:
	REGISTRY=localhost IMAGE_TAG=0 make build

push: push-react push-api

push-react:
	docker push ${REGISTRY}/pet-react:${IMAGE_TAG}

push-api:
	docker push ${REGISTRY}/pet-api:${IMAGE_TAG}
	docker push ${REGISTRY}/pet-api-php-fpm:${IMAGE_TAG}
	docker push ${REGISTRY}/pet-api-php-cli:${IMAGE_TAG}
	
deploy:
	ssh ${HOST} -p ${PORT} 'rm -rf site_${BUILD_NUMBER} && mkdir site_${BUILD_NUMBER}'
	scp -P ${PORT} docker-compose-production-env.yml ${HOST}:site_${BUILD_NUMBER}/docker-compose-production.yml
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && echo "COMPOSE_PROJECT_NAME=pet >> .env'
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && echo "REGISTRY=${REGISTRY} >> .env'
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && echo "IMAGE_TAG=${IMAHE_TAG} >> .env'
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && docker compose -f docker-compose-production.yml pull'
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && docker compose -f docker-compose-production.yml down --build --remove-orphans -d'
	ssh ${HOST} -p ${PORT} 'rm -f site'
	ssh ${HOST} -p ${PORT} 'ln -sr site_${BUILD_NUMBER} site'

rollback:
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && docker compose -f docker-compose-production.yml pull'
	ssh ${HOST} -p ${PORT} 'cd site_${BUILD_NUMBER} && docker compose -f docker-compose-production.yml down --build --remove-orphans -d'
	ssh ${HOST} -p ${PORT} 'rm -f site'
	ssh ${HOST} -p ${PORT} 'ln -sr site_${BUILD_NUMBER} site'

