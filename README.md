# 動かし方
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fonokatio%2Fhesonoo.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fonokatio%2Fhesonoo?ref=badge_shield)



.env.exampleを元に.envを作る。
sqliteを使うのなら`DB_CONNECTION=sqlite`にする。


```
$ composer install
$ touch database/database.sqlite
$ php artisan migrate
$ php artisan db:seed
$ mv .env.example .env
$ php artisan key:generate
$ php artisan serve
```


## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fonokatio%2Fhesonoo.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fonokatio%2Fhesonoo?ref=badge_large)