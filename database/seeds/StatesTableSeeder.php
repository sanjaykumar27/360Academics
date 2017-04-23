<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         if(DB::table('states')->get()->count() == 0){
         DB::table('states')->insert([
         	[ 'id' => '1','name' => 'ANDHRA PRADESH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '2','name' => 'ASSAM','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '3','name' => 'ARUNACHAL PRADESH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '4','name' => 'Gujarat','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '5','name' => 'BIHAR','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '6','name' => 'HARYANA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '7','name' => 'HIMACHAL PRADESH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '8','name' => 'JAMMU & KASHMIR','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '9','name' => 'KARNATAKA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '10','name' => 'KERALA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '11','name' => 'MADHYA PRADESH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '12','name' => 'MAHARASHTRA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '13','name' => 'MANIPUR','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '14','name' => 'MEGHALAYA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '15','name' => 'MIZORAM','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '16','name' => 'NAGALAND','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '17','name' => 'ORISSA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '18','name' => 'PUNJAB','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '19','name' => 'RAJASTHAN','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '20','name' => 'SIKKIM','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '21','name' => 'TAMIL NADU','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '22','name' => 'TRIPURA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '23','name' => 'UTTAR PRADESH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '24','name' => 'WEST BENGAL','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '25','name' => 'GOA','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '26','name' => 'PONDICHERY','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '27','name' => 'LAKSHDWEEP','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '28','name' => 'DAMAN & DIU','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '29','name' => 'DADRA & NAGAR','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '30','name' => 'CHANDIGARH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '31','name' => 'ANDAMAN & NICOBAR','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '32','name' => 'UTTARANCHAL','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '33','name' => 'JHARKHAND','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '34','name' => 'CHHATTISGARH','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '36','name' => 'Delhi','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ],
			[ 'id' => '89','name' => 'Telangana','country_id' => '103','entity_status' => 'Active','created_by' => 'System','updated_by' => 'System' ]
        ]);
    }

    }
}
