<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //



/**
        * Display a listing of the artcle.
        * @return Response
        */
        public function index()
        {
		$articles = DB::table('article')
				   ->join('author', 'id', '=', 'article.author_id')
				   ->select('article.id','article.title', 'author.name', 'article.text','article.url','article.createdAt')
				   ->get();
	

		    return Response::json(array(
		        'error' => false,
		        'urls' => $article->toArray()),
		        200
		    );
        }
        
     
      
        
        /**
        * create new artcle get data
        * @return Response
        */
        public function store()
        {
					    $article = new Article;

						$article->id = Request::get('id');
						$article->author_id = Request::get('author_id');
						$article->title = Request::get('title');
						$article->url = Request::get('url');
						$article->content = Request::get('content');
					    
			 
			    $article->save();
			 
			    return Response::json(array(
			        'error' => false,
			        'article' => $article->toArray()),
			        200
			    );
        }
    
        /**
        * Display the specified article.
        * @param  int  $id
        * @return Response
        */
        public function show($id)
        {


    $article = Article->where('id', $id)
                   ->get();
 
    return Response::json(array(
        'error' => false,
        'urls' => $article->toArray()),
        200
    );
        }
    
        /**
        * edit article
        * @param  int  $id
        * @return Response
        */
        public function edit($id)
        {

		 $article= Article::where('id', $id);
		 
		    if ( Request::get('url') )
		    {
		        $article->url = Request::get('url');
		    }
		 
		    if ( Request::get('article') )
		    {
		        $article->title = Request::get('article');
		    }
		 
		    $article->save();
		 
		    return Response::json(array(
		        'error' => false,
		        'message' => 'article updated'),
		        200
		    );
        }
    
    
        
      
        public function destroy($id)
        {

		   $article = Article::where('id', $id);
		 
		    $article->delete();
		 
		    return Response::json(array(
		        'error' => false,
		        'message' => 'article deleted'),
		        200
		        ); 
        }
}
