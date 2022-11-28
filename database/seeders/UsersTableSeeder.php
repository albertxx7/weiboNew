<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = '許許許';
        $user->email = 'a979845@yahoo.com.tw';
        $user->is_admin = true;
        $user->save();
    }
}
