<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();

    	$users = [
    		'Superadmin' => 'info@laxyo.com',
    		'HRD' => 'hr2@yolaxinfra.com'
    	];

    	foreach($users as $key=>$val)
    	{
    		User::create([
    			'name' => $key,
    			'email' => $val,
    			'password' => Hash::make('password')
    		]);
    	}
      
    }
}
