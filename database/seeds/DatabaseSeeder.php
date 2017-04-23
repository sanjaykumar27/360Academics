<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(DB::table('countries')->get()->count() == 0){
            $this->call(CountriesTableSeeder::class);
            $this->call(StatesTableSeeder::class);
            $this->call(CitiesTableSeeder::class);
        }

		 if(DB::table('users')->get()->count() == 0){
			$this->call(UsersTableSeeder::class);
		}
    }
}
