init: docker-down-clear \
	react-clear docker-pull docker-build docker-up \
	react-init
up: docker-up
down: docker-down
restart: down up
lint: react-lint
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

react-init: react-yarn-install react-ready

react-yarn-install:
	docker-compose run --rm node-cli yarn install

react-ready:
	docker run --rm -v ${PWD}/react:/app -w /app alpine touch .ready

react-lint:
	docker-compose run --rm node-cli yarn lint

react-lint-fix:
	docker-compose run --rm node-cli yarn lint-fix