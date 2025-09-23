<?php

namespace Database\Seeders;

use App\Models\KnowledgeCore;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeCoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создание администратора по умолчанию
        DB::table('knowledge_core')->insert([
            'description' => 'Тестовое описание',
            'phone' => 'Указать телефон',
            'email' => 'admin@knowledge-core.ru',
            'address' => 'Указать адрес',
            'references' => 'Указать публикации',
            'lab_link' => 'Указать ссылку',
            'github_link' => 'Указать ссылку',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
