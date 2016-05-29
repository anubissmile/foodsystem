<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder{
	public function run(){
		User::create([

            /*$table->increments('ID');
            $table->string('NAME');
            $table->string('SURNAME');
            $table->string('USERNAME');
            $table->string('EMAIL')->unique();
            $table->string('PASSWORD');
            $table->timestamps();*/
        	'NAME' => 'Wesarut',
        	'SURNAME' => 'Khumwilai',
        	'USERNAME' => 'admin',
        	'EMAIL' => 'wesarut.khm@gmail.com',
        	'PASSWORD' => bcrypt('1234'),
		]);
	}
}
