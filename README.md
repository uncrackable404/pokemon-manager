# Pokémon Team Manager Demo
The web app is created with Symfony and React as described in the [project document](https://docs.google.com/document/d/1m6AE33i7Vr8LMHA5tPVohkbyH4gVvP2HVsjrlnENazY/edit?usp=sharing
).

### Dependencies
- [Docker](https://www.docker.com/get-started) > 20.10 must installed to use this setup
- [Make](https://formulae.brew.sh/formula/make) useful but not mandatory

### Services exposed

| Service | Port | Notes             |
|---------|------|-------------------|
| Nginx   | 8080 | Access to API     |
| MySQL   | 4306 |                   |
| React   | 8000 | Access to Web App |
| PHP     | 9000 |                   |

### How to start project
1. Clone repository and go to the project root
2. Make sure that the above ports are free or modify the `docker-compose.yml` file and the `.env` files
3. Start the project the first time with this command: `make start`

### Main commands
- Reactive containers: `make up`
- Start first time containers: `make start`
- Restart containers: `make restart`
- Stop containers: `make stop`
- Kill containers: `make kill`

### Other commands
- Only install Symfony dependencies: `make install`
- Exec new migrations: `make migrate`
- Refresh database and exec all migrations: `make migrate-fresh`
- Import data from PokeApi: `make import`
- Show available routes: `make routes`

### TODOs
- Bugs Fix
- Improve usability and responsive
- Improve data import from PokeApi
- Implement the ability to edit teams and Pokémon
- Implement the ability to sort and filter data
- Add unit tests to the project
- Add CD/CI to the backend project
