<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $type
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, ProjectUser> $project_users
 * @property-read int|null $project_users_count
 * @method static Builder|Project newModelQuery()
 * @method static Builder|Project newQuery()
 * @method static Builder|Project query()
 * @method static Builder|Project whereCreatedAt($value)
 * @method static Builder|Project whereUpdatedAt($value)
 * @method static Builder|Project whereId($value)
 * @method static Builder|Project whereName($value)
 * @method static Builder|Project whereDescription($value)
 * @method static Builder|Project whereType($value)
 * @method static Builder|Project whereStatus($value)
 * @mixin Builder
 */
class Project extends Model
{
    use HasFactory;

    // Типы проекта
    const PUBLIC_TYPE = 0;  // Открытый (проект виден всем пользователям системы, даже гостям)
    const PRIVATE_TYPE = 1; // Закрытый (проект виден только тем пользователям, которые были добавлены к данному проекту)

    // Статус проекта
    const UNDER_EDITING = 0;    // На редактировании (проект находится на этапе разработки)
    const READY_TO_USE = 1;     // Готов к использованию (формирование проекта завершено и он готов к работе)
    const OUTDATED = 2;         // Устаревший (неактуальный проект с устаревшими или некорректными данными)


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

    public function project_users()
    {
        return $this->hasMany(ProjectUser::class, 'project_id');
    }
}
