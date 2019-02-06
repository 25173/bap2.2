<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$feeder = Faker\Factory::create();;
        for ($i = 0; $i <50; $i++ ){
        	App\user::create([
        		'name' => $feeder ->name,
		        'email' => $feeder->email,
		        'password' => Hash::make('secret')
	        ]);
        }
    }
}
