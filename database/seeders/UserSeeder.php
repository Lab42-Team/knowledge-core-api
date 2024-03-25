<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Создание тестового администратора
        DB::table('users')->insert([
            'name' => 'test-admin',
            'email' => 'test-admin@avia-back.ru',
            'password' => bcrypt('altair-admin'),
            'role' => User::ADMIN_ROLE,
            'status' => User::ACTIVE_STATUS,
            'full_name' => 'Тестовый администратор',
            'last_login_date' => Carbon::now(),
            'login_ip' => '127.0.0.1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
