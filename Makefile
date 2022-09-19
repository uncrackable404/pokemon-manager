restart: stop kill up install migrate-fresh
start: up install migrate-fresh

stop:
	docker-compose stop

kill:
	docker-compose kill

up:
	docker-compose up -d --build

install:
	docker-compose run backend composer install

migrate:
	docker-compose run backend php bin/console doctrine:migrations:migrate

migrate-fresh:
	docker-compose run backend php bin/console doctrine:schema:drop --full-database --force
	docker-compose run backend php bin/console doctrine:migrations:migrate --no-interaction
	docker-compose run backend php bin/console app:import-pokemons

import:
	docker-compose run backend php bin/console app:import-pokemons

routes:
	docker-compose run backend php bin/console debug:router
