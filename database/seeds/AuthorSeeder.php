<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('author')->insert([
					[ 'id' => 1,
				   	'name' => 'JohnSmith',
					],
					[ 'id' => 2,
				   	'name' => 'willSmith',
					],
					[ 'id' => 3,
				   	'name' => 'BarakObama',
					]

 ]);
    }
}
