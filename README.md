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

### Licence MIT
