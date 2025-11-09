<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProjectUser
 *
 * @property int $id
 * @property int $project_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @property-read Project $project
 * @method static Builder|ProjectUser newModelQuery()
 * @method static Builder|ProjectUser newQuery()
 * @method static Builder|ProjectUser query()
 * @method static Builder|ProjectUser whereCreatedAt($value)
 * @method static Builder|ProjectUser whereUpdatedAt($value)
 * @method static Builder|ProjectUser whereId($value)
 * @method static Builder|ProjectUser whereProjectId($value)
 * @method static Builder|ProjectUser whereUserId($value)
 * @mixin Builder
 */
class ProjectUser extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'project_id',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
