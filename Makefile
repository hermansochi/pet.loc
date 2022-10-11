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

api-wait-db:
	docker compose run --rm api-php-cli wait-for-it api-postgres:5432 -t 30

api-migrations:
	docker compose run --rm api-php-cli php artisan migrate:fresh

api-fixtures:
	docker compose run --rm api-php-cli php artisan storage:link
	docker compose run --rm api-php-cli php artisan db:seed
	docker compose run --rm api-php-cli php artisan avatar:add

api-generate-docs:
	cp ${PWD}/docs/scribe/* ${PWD}/api/.scribe/endpoints/ 
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

