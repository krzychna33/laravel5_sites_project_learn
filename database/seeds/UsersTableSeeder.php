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

        for($i = 0; $i<10; $i++){
            $user = new \App\User();

            $user->name = "User".$i;
            $user->password = "user";
            $user->email = "user".$i."@gmail.com";
            $user->password = bcrypt('user');
            $user->save();
        }

    }
}
