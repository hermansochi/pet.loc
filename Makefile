init: docker-down-clear \
	react-clear vue-clear \
	docker-pull docker-build docker-up \
	react-init vue-init
up: docker-up
down: docker-down
restart: down up
lint: react-lint vue-lint
lint-fix: react-lint-fix

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build --pull

react-clear:
	docker run --rm -v ${PWD}/react:/app -w /app alpine sh -c 'rm -rf .ready build'

vue-clear:
	docker run --rm -v ${PWD}/vue:/app -w /app alpine sh -c 'rm -rf .ready dist'

react-init: react-yarn-install react-ready

vue-init: vue-npm-install vue-ready

react-yarn-install:
	docker-compose run --rm react-node-cli yarn install

vue-npm-install:
	docker-compose run --rm vue-node-cli npm install

react-ready:
	docker run --rm -v ${PWD}/react:/app -w /app alpine touch .ready

vue-ready:
	docker run --rm -v ${PWD}/vue:/app -w /app alpine touch .ready

react-lint:
	docker-compose run --rm react-node-cli yarn eslint
	docker-compose run --rm react-node-cli yarn stylelint

react-lint-fix:
	docker-compose run --rm react-node-cli yarn eslint-fix

react-test-watch:
	docker-compose run --rm react-node-cli yarn test

react-test:
	docker-compose run --rm react-node-cli yarn test --watchAll=false

vue-lint:
	docker-compose run --rm vue-node-cli npm run lint

