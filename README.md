<p align="center">
    <a href="https://opensource.org/licenses/MIT">
        <img  width="50" src="https://img.shields.io/badge/License-MIT-yellow.svg"/>
    </a>
    <a href="https://laravel.com/">
        <img  width="50" src="https://laravel.com/img/logotype.min.svg"/>
    </a>
    <a href="https://vuejs.org/">
        <img  width="32" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/langfr-220px-Vue.js_Logo_2.svg.png"/>
    </a>
</p>
<p align="center">
    <a href="https://opensource.org/licenses/MIT">
        <img  width="40%" src="https://res.cloudinary.com/practicaldev/image/fetch/s--VoeQDBLy--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/lok6gwd0yztgjqjamxmi.png"/>
    </a>
</p>

## Metadata

A [Laravel sail](https://laravel.com/docs/9.x/sail) with VueJs with a default note list.

#### Install AmeriCloud assessment

```
composer install
php artisan key:generate
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

#### Copy .env file

```
cp .env.example .env
```

#### start docker component

```
sail up
```

#### Set populate database

```
sail php artisan migrate:fresh --seed
```

#### access PhpMyAdmin

```
http://localhost:8081
```

#### Install NPM Dependencies

```
sail npm install
sail npm run dev
```

#### access note list to 

```
http://localhost
```
<p align="center">
    <img src="https://fv9-6.failiem.lv/thumb_show.php?i=ra5ynfek6&view">
</p>

