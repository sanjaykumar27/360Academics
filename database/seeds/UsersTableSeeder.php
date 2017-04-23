<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(DB::table('users')->get()->count() == 0){
			DB::table('users')->insert([
				'fname' => 'Super',
				'lname' => 'Admin',
				'email' => 'vsingh@ebizneeds.com',
				'password' => bcrypt('123456'),
				'country_code' =>'+91',
				'phone' =>'9571388688',
				'address1' =>'148 phi space',
				'address2' =>'shayam nagar',
				'zipcode' =>'320120',
				'zipcode' =>'320120',
				'city_id' =>'12',
				'profile_picture' =>'',
				'email_token' =>'',
				'mobile_otp' =>'',
				'created_by' =>'System',
				'updated_by' =>'System',
			]);
		}
    }
}
