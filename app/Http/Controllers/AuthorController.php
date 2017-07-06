<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
   

 /**
        * create new author
        * @return Response
        */
        public function store()
        {
		    $author = new Author;

		         $author->id = Request::get('id');
		         $author->author_id = Request::get('author_id');
		    
 
    $author->save();
 
    return Response::json(array(
        'error' => false,
        'article' => $author->toArray()),
        200
    );
        }
}
