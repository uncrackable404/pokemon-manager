restart: stop up install migrate-fresh
start: up install migrate-fresh

stop:
	docker-compose stop

kill:
	docker-compose kill
	docker builder prune

up:
	docker-compose up -d --build

install:
	docker-compose exec backend composer install

migrate:
	docker-compose exec backend php bin/console doctrine:migrations:migrate

migrate-fresh:
	docker-compose exec backend php bin/console doctrine:schema:drop --full-database --force
	docker-compose exec backend php bin/console doctrine:migrations:migrate --no-interaction
	docker-compose exec backend php bin/console app:import-pokemons

import:
	docker-compose exec backend php bin/console app:import-pokemons

routes:
	docker-compose exec backend php bin/console debug:router
