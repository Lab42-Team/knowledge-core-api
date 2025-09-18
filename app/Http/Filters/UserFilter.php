<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const EMAIL_VERIFIED_AT = 'email_verified_at';
    public const REMEMBER_TOKEN = 'remember_token';
    public const ROLE = 'role';
    public const STATUS = 'status';
    public const FULL_NAME = 'full_name';
    public const LAST_LOGIN_DATE = 'last_login_date';
    public const LOGIN_IP = 'login_ip';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::EMAIL => [$this, 'email'],
            self::EMAIL_VERIFIED_AT => [$this, 'emailVerifiedAt'],
            self::REMEMBER_TOKEN => [$this, 'rememberToken'],
            self::ROLE => [$this, 'role'],
            self::STATUS => [$this, 'status'],
            self::FULL_NAME => [$this, 'fullName'],
            self::LAST_LOGIN_DATE => [$this, 'lastLoginDate'],
            self::LOGIN_IP => [$this, 'loginIp']
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where(self::NAME, 'like', "%{$value}%");
    }

    public function email(Builder $builder, $value)
    {
        $builder->where(self::EMAIL, 'like', "%{$value}%");
    }

    public function emailVerifiedAt(Builder $builder, $value)
    {
        $builder->where(self::EMAIL_VERIFIED_AT, $value);
    }

    public function rememberToken(Builder $builder, $value)
    {
        $builder->where(self::REMEMBER_TOKEN, 'like', "%{$value}%");
    }

    public function role(Builder $builder, $value)
    {
        $builder->where(self::ROLE, $value);
    }

    public function status(Builder $builder, $value)
    {
        $builder->where(self::STATUS, $value);
    }

    public function fullName(Builder $builder, $value)
    {
        $builder->where(self::FULL_NAME, 'like', "%{$value}%");
    }

    public function lastLoginDate(Builder $builder, $value)
    {
        $builder->where(self::LAST_LOGIN_DATE, 'like', "%{$value}%");
    }

    public function loginIp(Builder $builder, $value)
    {
        $builder->where(self::LOGIN_IP, 'like', "%{$value}%");
    }
}
