<?php

use Illuminate\Database\Seeder;

class AdminAcount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	
        $admin = array(
        	'email' => 'admin@gmail.com',
        	'password' => 'admin',
        	'level' => 'admin'
        );
        
        DB::table('pengguna')->insert($admin);
    }
}