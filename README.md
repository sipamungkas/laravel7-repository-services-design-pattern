# Laravel 7 with Repository and Services Layer Design

### Installation

#### Clone This Repository.

```sh
$ git clone https://github.com/ligarp/laravel7-repository-services-design-pattern.git
```

Database Configuration
Open the Directory, copy and rename .env.example to .env
open the .env file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

#### Install the dependencies

Open your favorite terminal and write this

```sh
$ cd laravel7-repository-services-design-pattern
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
```

Verify the web by navigating to your server address in your preferred browser.

```sh
127.0.0.1:8000
```

#### Route List

| Domain | Method   | URI         | Name         | Action                                     | Middleware |
| ------ | -------- | ----------- | ------------ | ------------------------------------------ | ---------- |
|        | GET/HEAD | /           | post.index   | App\Http\Controllers\PostController@index  | web        |
|        | GET/HEAD | api/user    |              | Closure                                    | api        |
|        |          |             |              |                                            | auth:api   |
|        | POST     | post        | post.store   | App\Http\Controllers\PostController@create | web        |
|        | GET/HEAD | post/{\$id} | post.edit    | App\Http\Controllers\PostController@read   | web        |
|        | PUT      | post/{\$id} | post.update  | App\Http\Controllers\PostController@update | web        |
|        | DELETE   | post/{\$id} | post.destroy | App\Http\Controllers\PostController@delete | web        |

### Todos

-   Write Authentication
-   Write another complex web

## License

MIT
