<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\KnowledgeCore
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $references
 * @property string|null $lab_link
 * @property string|null $github_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|KnowledgeCore newModelQuery()
 * @method static Builder|KnowledgeCore newQuery()
 * @method static Builder|KnowledgeCore query()
 * @method static Builder|KnowledgeCore whereCreatedAt($value)
 * @method static Builder|KnowledgeCore whereUpdatedAt($value)
 * @method static Builder|KnowledgeCore whereId($value)
 * @method static Builder|KnowledgeCore whereDescription($value)
 * @method static Builder|KnowledgeCore wherePhone($value)
 * @method static Builder|KnowledgeCore whereEmail($value)
 * @method static Builder|KnowledgeCore whereAddress($value)
 * @method static Builder|KnowledgeCore whereReferences($value)
 * @method static Builder|KnowledgeCore whereLabLink($value)
 * @method static Builder|KnowledgeCore whereGithubLink($value)
 * @mixin Builder
 */
class KnowledgeCore extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'knowledge_core';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'description',
        'phone',
        'email',
        'address',
        'references',
        'lab_link',
        'github_link',
    ];
}
