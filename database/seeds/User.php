<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
            'name'=>'khanh',    
            'email'=>'khanh@gmail.com',
            'password'=>bcrypt('123456'),
            'level'=>1
            ],

            [   'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>1
            ],
    ];
        DB::table('users')->insert($data);
    }
}
