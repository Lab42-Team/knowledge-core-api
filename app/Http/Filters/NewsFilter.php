<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class NewsFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const STATUS = 'status';
    public const DATE = 'date';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::STATUS => [$this, 'status'],
            self::DATE => [$this, 'date']
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

    public function status(Builder $builder, $value)
    {
        $builder->where(self::STATUS, $value);
    }

    public function date(Builder $builder, $value)
    {
        $builder->where(self::DATE, $value);
    }
}
