<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Ingredient;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IngredientTableSeeder::class);
    }
}

class IngredientTableSeeder extends Seeder{
    public function run(){
        /**
         * 
            $table->string('description');
            $table->integer('price');
            $table->enum('traits', [
                'increment',
                'replacement',
                'additional'
            ]);
            $table->enum('type', [
                'noodle',
                'soup',
                'topping',
                'other'
            ]);
            $table->date('create_date');
         *
         */
        Ingredient::where('id','>','-1')->delete();

        /**
         * IF USE CREATE BY MODEL YOU CAN INSERT 
         * ONE RECORD ONLY, USE INSERT INSTEAD!
         */
        $today = date('Y-m-d');
        $dt = date('Y-m-d H:i:s');
        $data = [
            /**
             *  NOODLE
             */
        [
                'description' => 'เส้นเล็ก',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'เส้นใหญ่',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'หมี่ขาว',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'บะหมี่',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'วุ้นเส้น',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'มาม่า',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'noodle',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            /**
             * SOUP
             */
            [
                'description' => 'ต้มยำน้ำข้น',
                'price' => 30,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'ต้มยำน้ำใส',
                'price' => 20,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'น้ำใส',
                'price' => 20,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'เย็นตาโฟ',
                'price' => 20,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'ต้มยำแห้ง',
                'price' => 20,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'แห้ง',
                'price' => 20,
                'traits' => 'increment',
                'type' => 'soup',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            /**
             * TOPPING
             */
            [
                'description' => 'ลูกชิ้นไก่',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'topping',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'ลูกชิ้นปลา',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'topping',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'เกี๊ยว',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'topping',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'หมูสับ',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'topping',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'ไข่ล้วน',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'topping',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            /**
             * OTHER.
             */
            [
                'description' => 'ไม่ใส่ผัก',
                'price' => 0,
                'traits' => 'increment',
                'type' => 'other',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'เพิ่มไข่',
                'price' => 5,
                'traits' => 'increment',
                'type' => 'other',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'ยกทัพ',
                'price' => 30,
                'traits' => 'replacement',
                'type' => 'other',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ],
            [
                'description' => 'พิเศษ ฿5',
                'price' => 5,
                'traits' => 'additional',
                'type' => 'other',
                'create_date' => $today,
                'created_at' => $dt,
                'updated_at' => $dt
            ]
        ];

        Ingredient::insert($data);
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
            'name' => 'Wesarut',
            'surname' => 'Khumwilai',
            'username' => 'admin',
            'email' => 'wesarut.khm@gmail.com',
            'password' => Hash::make('1234'),
        ]);

		User::create([
        	'name' => 'Vikrom',
        	'surname' => 'Bkk',
        	'username' => 'vik',
        	'email' => 'vikrom.bkk@gmail.com',
        	'password' => Hash::make('50vik'),
		]);
	}
}
