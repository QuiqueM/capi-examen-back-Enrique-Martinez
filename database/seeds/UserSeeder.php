<?php

use Illuminate\Database\Seeder;
use App\User;
use App\user_domicilio;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create();
        factory(user_domicilio::class, 100)->create();
    }
}
