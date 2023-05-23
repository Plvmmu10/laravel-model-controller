
## Inizializzazione Progetto Laravel

```php
#Installare e creare una cartella con la struttura Laravel

composer create-project --prefer-dist laravel/laravel:^9.2 "Nome progetto"
```
```php
#Entrare nel progetto appena creato

cd "Nome progetto"
```
```php
#Una volta che sono all'interno della cartella "Nome progetto" apriamola su VS

code . -r
```
```php
#Impostiamo il preset

composer require pacificdev/laravel_9_preset   
```

```php
#Installiamo Bootstrap

php artisan preset:ui bootstrap
```
```php
#Installiamo vite e fontawesome
npm install         
npm install --save @fortawesome/fontawesome-free  
```

_________________________________________
```php
#Inserire all'interno di vite.config.js su "alias"

'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
```
___________________________________________


_____________________________________
```php
#Verificare che ci sia all'interno di app.scss

@use './partials/variables' as *; 
```

## Codice da mettere in app.scss per importare fontawesome e bootstrap
```js
$fa-font-path: "../fonts/webfonts" !default; (copiare la cartella webfonts di fontawesome dentro una cartella fonts all'interno di resources)

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import '~bootstrap/scss/bootstrap';"
```
_______________________________________________________________

## Server Vite 
npm run dev

## Server Laravel
php artisan serve

php artisan key:generate
_______________________________________________________________
## Controller & Models

php artisan make:controller "NomeController"

php artisan make:model "NomeModel"

cambiare il nome del db
DB_DATABASE="Nome DB"
_____________________________________________________________
## Info utili


Per inserire le immagini che non si trovano dentro public
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""

Nel caso sia un BG non sarà necessario.
Ovviamente sarò necessari oavere all'interno di app.js

"import.meta.glob([
    '../img/**'
])"
