<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Роли пользователей
    const ADMIN_ROLE = 0;       // Администратор (может все в рамках системы)
    const USER_ROLE = 2;        // Обычный пользователь (зарегистрированный пользователь, которому доступны функции платформы)
    const GUEST_ROLE = 3;       // Гость (ничего не может, только видит что-то рекламное или информационное, а также видит открытые проекты)

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
}
