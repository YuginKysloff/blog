<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'avatar' => 'default.jpg'
        ]);

        DB::table('role_users')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
