<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class KnowledgeCoreFilter extends AbstractFilter
{
    public const DESCRIPTION = 'description';
    public const PHONE = 'phone';
    public const EMAIL = 'email';
    public const ADDRESS = 'address';
    public const REFERENCES = 'references';
    public const LAB_LINK = 'lab_link';
    public const GITHUB_LINK = 'github_link';

    protected function getCallbacks(): array
    {
        return [
            self::DESCRIPTION => [$this, 'description'],
            self::PHONE => [$this, 'phone'],
            self::EMAIL => [$this, 'email'],
            self::ADDRESS => [$this, 'address'],
            self::REFERENCES => [$this, 'references'],
            self::LAB_LINK => [$this, 'labLink'],
            self::GITHUB_LINK => [$this, 'githubLink']
        ];
    }

    public function description(Builder $builder, $value)
    {
        $builder->where(self::DESCRIPTION, 'like', "%{$value}%");
    }

    public function phone(Builder $builder, $value)
    {
        $builder->where(self::PHONE, 'like', "%{$value}%");
    }

    public function email(Builder $builder, $value)
    {
        $builder->where(self::EMAIL, 'like', "%{$value}%");
    }

    public function address(Builder $builder, $value)
    {
        $builder->where(self::ADDRESS, 'like', "%{$value}%");
    }

    public function references(Builder $builder, $value)
    {
        $builder->where(self::REFERENCES, 'like', "%{$value}%");
    }

    public function labLink(Builder $builder, $value)
    {
        $builder->where(self::LAB_LINK, 'like', "%{$value}%");
    }

    public function githubLink(Builder $builder, $value)
    {
        $builder->where(self::GITHUB_LINK, 'like', "%{$value}%");
    }
}
