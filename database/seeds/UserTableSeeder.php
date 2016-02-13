<?php

use Illuminate\Database\Seeder;
use cmp\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[

        	'name'       => 'bono', 
        	'last_name'  => 'Hernandez',
        	'email'      => 'mackena91@gmail.com',
        	'user'       => 'bono91',
        	'password'   => \Hash::make('123456'),
        	'type'       => 'admin',
        	'active'     => '1',
        	'address'    => 'Igancio Zaragoza 37, Calaco,Benito Juarez,Veracruz,',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,        	
        	],
        	[
             'name'      => 'citlali', 
        	'last_name'  => 'Alonso',
        	'email'      => 'citlali@gmail.com',
        	'user'       => 'yeyejtzi',
        	'password'   => \Hash::make('123456'),
        	'type'       => 'user',
        	'active'     => '1',
        	'address'    => 'Igancio Zaragoza 37, Calaco,Benito Juarez,Veracruz,',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,   
        	 ]
            );
        User::insert($data);
    }
}
