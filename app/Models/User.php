<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property int $role
 * @property int $status
 * @property string|null $full_name
 * @property string $last_login_date
 * @property string $login_ip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, ProjectUser> $project_users
 * @property-read int|null $project_users_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRole($value)
 * @method static Builder|User whereStatus($value)
 * @method static Builder|User whereFullName($value)
 * @method static Builder|User whereLastLoginDate($value)
 * @method static Builder|User whereLoginIp($value)
 * @method static Builder|User whereOrganizationId($value)
 * @mixin Builder
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Роли пользователей
    const ADMIN_ROLE = 0; // Администратор (может все в рамках системы)
    const USER_ROLE = 1;  // Обычный пользователь (зарегистрированный пользователь, которому доступны функции платформы)
    const GUEST_ROLE = 2; // Гость (ничего не может, только видит что-то рекламное или информационное, а также видит открытые проекты)

    // Статусы пользователей
    const ACTIVE_STATUS = 0;       // Авторизованный пользователь, который может взаимодействовать с системой
    const INACTIVE_STATUS = 1;     // Авторизованный пользователь, но который не может взаимодействовать с системой
    const NOT_VERIFIED_STATUS = 2; // Пользователь не прошедший до конца процедуру верификации при регистрации аккаунта

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'email',
        'email_verified_at',
        'remember_token',
        'role',
        'status',
        'full_name',
        'last_login_date',
        'login_ip',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function project_users()
    {
        return $this->hasMany(ProjectUser::class, 'user_id');
    }
}
