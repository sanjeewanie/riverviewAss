create author
$data='id=1&author_id=1'
$ curl -i --user firstuser:first_password -d $data http://localhost/laravel2/public/index.php/api/author

create Article

$data='id=1&author_id=1&title=title1&url=url1&content=content.....1'
$ curl -i --user firstuser:first_password -d $data http://localhost/laravel2/public/index.php/api/article


for other process also we can pass curl request with matching below URI and api functions


 Domain | Method    | URI                        | Name            | Action                                         | Middleware   |
+--------+-----------+----------------------------+-----------------+------------------------------------------------+--------------+
|        | GET|HEAD  | /                          |                 | Closure                                        | web          |
|        | GET|HEAD  | api/article                | article.index   | App\Http\Controllers\ArticleController@index   | api          |
|        | POST      | api/article                | article.store   | App\Http\Controllers\ArticleController@store   | api          |
|        | GET|HEAD  | api/article/create         | article.create  | App\Http\Controllers\ArticleController@create  | api          |
|        | GET|HEAD  | api/article/{article}      | article.show    | App\Http\Controllers\ArticleController@show    | api          |
|        | PUT|PATCH | api/article/{article}      | article.update  | App\Http\Controllers\ArticleController@update  | api          |
|        | DELETE    | api/article/{article}      | article.destroy | App\Http\Controllers\ArticleController@destroy | api          |
|        | GET|HEAD  | api/article/{article}/edit | article.edit    | App\Http\Controllers\ArticleController@edit    | api          |
|        | GET|HEAD  | api/author                 | author.index    | App\Http\Controllers\AuthorController@index    | api          |
|        | POST      | api/author                 | author.store    | App\Http\Controllers\AuthorController@store    | api          |
|        | GET|HEAD  | api/author/create          | author.create   | App\Http\Controllers\AuthorController@create   | api          |
|        | GET|HEAD  | api/author/{author}        | author.show     | App\Http\Controllers\AuthorController@show     | api          |
|        | PUT|PATCH | api/author/{author}        | author.update   | App\Http\Controllers\AuthorController@update   | api          |
|        | DELETE    | api/author/{author}        | author.destroy  | App\Http\Controllers\AuthorController@destroy  | api          |
|        | GET|HEAD  | api/author/{author}/edit   | author.edit     | App\Http\Controllers\AuthorController@edit     | api          |
|        | GET|HEAD  | api/user                   |                 | Closure                                        | api,auth:api |
+--------+-----------+----------------------------+-----------------+------------------------------------------------+-------------







