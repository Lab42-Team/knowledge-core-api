<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class NewsFilter extends AbstractFilter
{
    public const NAME = 'name';
    //public const DESCRIPTION = 'description';
    public const STATUS = 'status';
    //public const DATE = 'date';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::STATUS => [$this, 'status'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }
}
