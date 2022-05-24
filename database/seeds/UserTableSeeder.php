<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) {
            $newUser = new User();
            $newUser->name = 'user di prova' . $i;
            $newUser->email = 'email@prova' . $i . '.it';
            $newUser->password =Hash::make('prova' . $i);

            $newUser->save();
        };
    }
}
