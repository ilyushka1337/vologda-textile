include ./docker/.env

.PHONY: up down start stop restart destroy build logs ps sh manage check makemigrations migrate shell dbshell collectstatic changepassword

RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))


THIS_FILE := $(lastword $(MAKEFILE_LIST))

# Defining the user's UID and GID. It is used to avoid file permission issues
UID := $(shell id -u)
GID := $(shell id -g)


# Avoiding issue with "docker compose" and "docker-compose" by checking which one is used in the system
DOCKER_COMPOSE := $(shell command -v docker-compose 2> /dev/null || echo docker compose)

# Sometimes this file is called "docker-compose.yml" and Sometimes "docker-compose.yaml", this line sets which one is gonna be used
COMPOSE_FILE :=  ./docker/$(if $(wildcard docker-compose.yaml),docker-compose.yaml,docker-compose.yml)

.DEFAULT_GOAL := help

help: ## This help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

# Docker Compose commands
up:
	UID=$(UID) GID=$(GID)	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) up -d $(filter-out $@,$(MAKECMDGOALS))
down:
	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) down $(filter-out $@,$(MAKECMDGOALS))
start:
	UID=$(UID) GID=$(GID)	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) start $(filter-out $@,$(MAKECMDGOALS))
stop:
	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) stop $(filter-out $@,$(MAKECMDGOALS))
restart:
	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) stop $(filter-out $@,$(MAKECMDGOALS))
	UID=$(UID) GID=$(GID)	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) up -d $(filter-out $@,$(MAKECMDGOALS))
destroy:
	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) down -v $(filter-out $@,$(MAKECMDGOALS))
build:
	UID=$(UID) GID=$(GID)	$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) build $(filter-out $@,$(MAKECMDGOALS))
exec:
	@$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) exec $(filter-out $@,$(MAKECMDGOALS))
logs:
	@$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) logs -f $(filter-out $@,$(MAKECMDGOALS))
ps:
	@$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) ps $(filter-out $@,$(MAKECMDGOALS))
sh:
	@$(DOCKER_COMPOSE) -f $(COMPOSE_FILE) exec $(filter-out $@,$(MAKECMDGOALS)) sh -c 'if command -v bash &> /dev/null; then bash; else sh; fi'

#Bitrix utils
bx-setup: create-dir ## Download bitrixsetup.php file to the site path
	curl -fsSL https://www.1c-bitrix.ru/download/scripts/bitrixsetup.php -o ./www/bitrixsetup.php

bx-restore: create-dir ## Download restore.php file to the site path
	curl -fsSL https://www.1c-bitrix.ru/download/scripts/restore.php -o ./www/restore.php

bx-server-test: create-dir ## Download bitrix_server_test.php file to the site path
	curl -fsSL https://dev.1c-bitrix.ru/download/scripts/bitrix_server_test.php -o ./www/bitrix_server_test.php

composer-install: ## Install composer deps
	@$(DOCKER_COMPOSE) exec php composer -d /var/www/bitrix/local install

#Utils
create-dir: ## Create site path
	UID=$(UID) GID=$(GID) mkdir -p ./www

default: help

# Overriding targets other then the first one, so we could use targets as positional arguments (e.g: make manage check)
$(RUN_ARGS):
	@:
