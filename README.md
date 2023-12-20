## Installazione laravel

```bash
# Da terminale
cd /Users/simonenegrisoli/Desktop/Boolean/esercizi-boolean

composer create-project --prefer-dist laravel/laravel:^9.2 nome_progetto

cd nome_progetto

code . -r

# per far partire il server
php artisan serve

# per fermarlo
ctrl + c
```

## Configurazione Laravel

```bash
# pacchetto boolean per automatizzare il processo
composer require pacificdev/laravel_9_preset

# installo il pacchetto
php artisan preset:ui bootstrap

npm install

# fontawesome o qualunque altra libreria voglio aggiungere
npm install --save @fortawesome/fontawesome-free


# in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

# vado dentro node_modules -> @fortawesome -> e copio la cartella webfonts dentro la cartella resources

# adesso vado dentro resources -> scss -> app.scss e aggiungo in cima questo:
$fa-font-path: "../webfonts" !default;


@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import “~@fortawesome/fontawesome-free/scss/brands”;


# creo la cartella partials all'interno di scss e creo il file _variables; poi importo il file dentro app.scss sopra tutto quanto (anche sopra i fontawesome)
@use './partials/variables' as *;

# dentro views creo una cartella layouts e metto il template di base
```

## Comandi Github

```bash

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/SimoneNegrisoli/template_laravel_base.git
git push -u origin main

```

## Iniziallizzazione progetto

```bash

# terminale
composer install

# copiare env.explample e rinominare la copia come .env, dentro do il comando
php artisan key:generate
```
