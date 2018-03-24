# 動かし方


.env.exampleを元に.envを作る。
sqliteを使うのなら`DB_CONNECTION=sqlite`にする。


```
$ composer install
$ touch database/database.sqlite
$ php artisan migrate
$ php artisan db:seed
$ touch .env
$ php artisan key:generate
$ php artisan serve
```
