# mini xampp avec docker

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
```

## Description

- debian
- php 8.0 mod_apache avec les modules pdo + xdebug
- phpmyadmin
- mysql 5.7 avec un compte root / root

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