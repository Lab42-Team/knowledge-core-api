<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Developments
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $year
 * @property string|null $authors
 * @property string|null $publications
 * @property string|null $requirements
 * @property string|null $practical_application
 * @property string|null $version_history
 * @property string|null $demo_videos
 * @property string|null $software_link
 * @property string|null $documentation_link
 * @property string|null $github_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Developments newModelQuery()
 * @method static Builder|Developments newQuery()
 * @method static Builder|Developments query()
 * @method static Builder|Developments whereCreatedAt($value)
 * @method static Builder|Developments whereUpdatedAt($value)
 * @method static Builder|Developments whereId($value)
 * @method static Builder|Developments whereName($value)
 * @method static Builder|Developments whereDescription($value)
 * @method static Builder|Developments whereYear($value)
 * @method static Builder|Developments whereAuthors($value)
 * @method static Builder|Developments wherePublications($value)
 * @method static Builder|Developments whereRequirements($value)
 * @method static Builder|Developments wherePracticalApplication($value)
 * @method static Builder|Developments whereVersionHistory($value)
 * @method static Builder|Developments whereDemoVideos($value)
 * @method static Builder|Developments whereSoftwareLink($value)
 * @method static Builder|Developments whereDocumentationLink($value)
 * @method static Builder|Developments whereGithubLink($value)
 * @mixin Builder
 */
class Developments extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'developments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'year',
        'authors',
        'publications',
        'requirements',
        'practical_application',
        'version_history',
        'demo_videos',
        'software_link',
        'documentation_link',
        'github_link',
    ];

}
