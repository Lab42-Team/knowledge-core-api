<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;


class Project extends Model
{
    use HasFactory;

    // Типы проекта
    const PUBLIC_TYPE = 0;  // Открытый (проект виден всем пользователям системы, даже гостям)
    const PRIVATE_TYPE = 1; // Закрытый (проект виден только тем пользователям, которые были добавлены к данному проекту)

    // Статус проекта
    const UNDER_EDITING = 0; //На редактировании (проект находится на этапе разработки)
    const READY_TO_USE = 1; //Готов к использованию (формирование проекта завершено и он готов к работе)
    const OUTDATED = 2; //Устаревший (неактуальный проект с устаревшими или некорректными данными)


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'authors',
        'status',
    ];
}
