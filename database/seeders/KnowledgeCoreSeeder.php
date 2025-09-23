<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeCoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создание основной информации о проекте по умолчанию
        DB::table('knowledge_core')->insert([
            'description' => 'Тестовое описание',
            'phone' => 'Телефона нет',
            'email' => 'admin@knowledge-core.ru',
            'address' => 'Адреса нет',
            'references' => 'Публикаций нет',
            'lab_link' => 'http://www.safety-irk.ru/',
            'github_link' => 'https://github.com/Lab42-Team/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
