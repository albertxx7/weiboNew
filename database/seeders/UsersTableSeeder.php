<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(15)->create();

        $user = User::find(1);
        $user->name = 'Albertxx7';
        $user->email = 'a979845@gmail.com';
        $user->is_admin = true;
        $user->save();
    }
}
