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
        DB::table('tb_admin')->delete();
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
            'PASSWORD' => Hash::make('1234'),
        ]);

		User::create([
        	'NAME' => 'Vikrom',
        	'SURNAME' => 'Bkk',
        	'USERNAME' => 'vik',
        	'EMAIL' => 'vikrom.bkk@gmail.com',
        	'PASSWORD' => Hash::make('50vik'),
		]);
	}
}
