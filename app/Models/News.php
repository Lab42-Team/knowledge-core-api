<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|News newModelQuery()
 * @method static Builder|News newQuery()
 * @method static Builder|News query()
 * @method static Builder|News whereCreatedAt($value)
 * @method static Builder|News whereUpdatedAt($value)
 * @method static Builder|News whereId($value)
 * @method static Builder|News whereName($value)
 * @method static Builder|News whereDescription($value)
 * @method static Builder|News whereStatus($value)
 * @method static Builder|News whereDate($value)
 * @mixin Builder
 */
class News extends Model
{
    use HasFactory;
    use Filterable;

    // Статусы новостей, которые будут публиковаться на платформе
    const PUBLISHED_STATUS = 0; // Опубликована (новость открыта для отображения на сайте)
    const HIDDEN_STATUS = 1;    // Скрытая (новость скрыта для отображения на сайте)

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

    /**
     * Получение списка статусов.
     *
     * @return string[]
     */
    public static function getStatusArray()
    {
        return [
            self::PUBLISHED_STATUS => __('news.NEWS_STATUS.PUBLISHED'),
            self::HIDDEN_STATUS => __('news.NEWS_STATUS.HIDDEN'),
        ];
    }

    /**
     * Получение названия статуса.
     *
     * @param $status
     * @return array|\ArrayAccess|mixed
     */
    public static function getStatusName($status)
    {
        return Arr::get(self::getStatusArray(), $status);
    }
}
