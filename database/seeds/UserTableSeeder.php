<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Provider\cs_CZ\DateTime as Cs_CZDateTime;
use Faker\Provider\DateTime;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= array (
            [
                'name' => 'pepe',
                'last_name'=> 'argento',
                'email'=> 'pepe@gmail.com',
                'user'=> 'pepe1',
                'password'=>\Hash::make('123456'),
                'type'=>'admin',
                'active'=>1,
                'address'=>'florida 3333, bs as',
                'created_at'=>new DateTime(),
                'update_at'=>new DateTime()
            ],
            [
                'name' => 'moni',
                'last_name'=> 'argento',
                'email'=> 'moni@gmail.com',
                'user'=> 'moni1',
                'password'=>\Hash::make('123456'),
                'type'=>'user',
                'active'=>1,
                'address'=>'san juan 3333, bs as',
                'created_at'=>new DateTime(),
                'update_at'=>new DateTime()
            ],

        );
        User::insert($data);
    
    }
}