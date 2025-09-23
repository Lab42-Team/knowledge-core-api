<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(KnowledgeCoreSeeder::class);
        $this->command->info('Данные по-умолчанию загружены в базу данных!');
    }
}
