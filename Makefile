build:
	docker-compose build
	bash composer-install.sh

build-dev:
	docker-compose build
	bash composer-install-dev.sh

up:
	docker-compose up

