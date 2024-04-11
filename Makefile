setup:
	@make build
	@make up 
	@make composer-update
build:
	docker-compose build --no-cache --force-rm
down:
	docker-compose down
up:
	docker-compose up -d