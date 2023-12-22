# Projet de restaurant O Cnamo

Ce projet est test pour la formation DevWeb du CNAM.

## Prérequis

- Apache 2.4.54
- MariaDB 10.10.2
- PHP 8.0.26
- Composer 2.6.5
- NodeJS et NPM @TODO

## Insallation

### Version dev
 il faut d'abord cloner l'application en local :
 ```
 git clone https//github.com/jibundeyare/cnam-nfa021-2023-2024-laravel-10
 ```
 Ensuite, il faut creer une BDD puis configurer les accès dans le fichier .env :
 ```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=mon_application
 DB_USERNAME=mon_application
 DB_PASSWORD=123
```
Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash : 
```
./migrate.sh
```
vous pouvez donner un nom à l'application dans le fichier .env : 
```
APP_NAME="Mon Application"
```
## Requêtes SQL utiles

```
~~ Liste des catégories et de leurs plats
SELECT plats.id, plats.nom, plats.prix, categories.id, categories.nom
FROM categories
INNER JOIN plats ON categories.id = plats.categories_id
ORDER BY categories.id, plats.nom;
```
```
~~ Liste des plats et de leur étiquettes
SELECT plats.id, plats.nom, plats.prix, etiquettes.nom, etiquettes.id
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = etiquettes_plats.etiquettes_id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom;
```
## Utilisation

Dans le terminal :
```

php artisan seve
```

Aller sur la page [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Recommandations

### Tailles des images d'ambiancce

La taille recommandées est :

- Largeur 1024
- Hauteur : 786

Il vaut mieux utiliser des fichiers JPEG car ils sont plus légers.

## Mentions légales

### Licence du projet

? @TODO

### Droits d'auteur 

Toutes les photos du site on étét réalisée par ...