<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserção de dados
//        $user = new \App\UserRequest();
//        $user->creater([
//            'name' => 'teste'
//        ]);


        factory(\App\User::class, 20)->create();
    }


}
