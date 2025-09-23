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
        // Создание администратора по умолчанию
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@knowledge-core.ru',
            'password' => bcrypt('admin'),
            'role' => User::ADMIN_ROLE,
            'status' => User::ACTIVE_STATUS,
            'full_name' => 'Тестовый администратор',
            'last_login_date' => Carbon::now(),
            'login_ip' => '127.0.0.1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Создание пользователя по умолчанию
        DB::table('users')->insert([
            'name' => 'demo',
            'email' => 'demo@knowledge-core.ru',
            'password' => bcrypt('demo'),
            'role' => User::USER_ROLE,
            'status' => User::ACTIVE_STATUS,
            'full_name' => 'Тестовый пользователь',
            'last_login_date' => Carbon::now(),
            'login_ip' => '127.0.0.1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
