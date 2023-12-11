<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;


class News extends Model
{
    use HasFactory;

    // Статусы новостей, которые будут публиковаться на платформе
    const PUBLISHED_STATUS = 0;  // Опубликована (новость открыта для отображения на сайте)
    const HIDDEN_STATUS = 1; // Скрытая (новость скрыта для отображения на сайте)

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'status',
        'date',
    ];
}
