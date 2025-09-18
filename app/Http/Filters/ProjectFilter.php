<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProjectFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const TYPE = 'type';
    public const STATUS = 'status';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::TYPE => [$this, 'type'],
            self::STATUS => [$this, 'status']
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where(self::NAME, 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where(self::DESCRIPTION, 'like', "%{$value}%");
    }

    public function type(Builder $builder, $value)
    {
        $builder->where(self::TYPE, $value);
    }

    public function status(Builder $builder, $value)
    {
        $builder->where(self::STATUS, $value);
    }
}
