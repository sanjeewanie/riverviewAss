<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
DB::table('article')->insert([
           	[ 'id' => 1,
            	'author_id' => 1,
		'title' => 'Anewarticle',
 		'url' => '/article/1',
 		'content' => 'Some content.........1',
		],
		['id' => 2,
            	'author_id' => 2,
		'title' => 'Anewarticle',
 		'url' => '/article/2',
 		'content' => 'Some content ......2',
		],
		['id' => 3,
		'author_id' => 3,
		'title' => 'Anewarticle',
		 'url' => '/article/3',
		 'content' => 'Some content ......3',
		]

        ]);


    }
}
