# mini xampp pour Doctrine avec docker

## Architecture

```
C:.
├───infra 
│       Dockerfile
│       docker-compose.yaml
├───db # fichier source mysql
│
└───src  # fichier source
        index.php
        db.sql
        composer.json
        composer.lock
```

## Description

- debian
- php 8.0 mod_apache avec les modules pdo + xdebug
- phpmyadmin
- mysql 5.7 avec un compte root / root
- install git zip curl
- install composer
- préparation du fichier composer.json pour installation de Doctrine PHP

## Documentation Doctrine PHP

[Doctrine PHP Setup](https://www.doctrine-project.org/projects/doctrine-orm/en/2.13/tutorials/getting-started.html#project-setup)

## commandes à connaître

cmd : start / stop / rebuild Dockerfile divers

```
docker-compose up -d
docker-compose stop
docker-compose down

docker-compose up -d --build

docker ps 
docker ps -a

docker stop <id conteneur>
docker exec -it <id conteneur> bash 
```