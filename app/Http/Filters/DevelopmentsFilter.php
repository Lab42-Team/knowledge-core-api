<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class DevelopmentsFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const YEAR = 'year';
    public const AUTHORS = 'authors';
    public const PUBLICATIONS = 'publications';
    public const REQUIREMENTS = 'requirements';
    public const PRACTICAL_APPLICATION = 'practical_application';
    public const VERSION_HISTORY = 'version_history';
    public const DEMO_VIDEOS = 'demo_videos';
    public const SOFTWARE_LINK = 'software_link';
    public const DOCUMENTATION_LINK = 'documentation_link';
    public const GITHUB_LINK = 'github_link';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::YEAR => [$this, 'year'],
            self::AUTHORS => [$this, 'authors'],
            self::PUBLICATIONS => [$this, 'publications'],
            self::REQUIREMENTS => [$this, 'requirements'],
            self::PRACTICAL_APPLICATION => [$this, 'practicalApplication'],
            self::VERSION_HISTORY => [$this, 'versionHistory'],
            self::DEMO_VIDEOS => [$this, 'demoVideos'],
            self::SOFTWARE_LINK => [$this, 'softwareLink'],
            self::DOCUMENTATION_LINK => [$this, 'documentationLink'],
            self::GITHUB_LINK => [$this, 'githubLink']
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

    public function year(Builder $builder, $value)
    {
        $builder->where(self::YEAR, $value);
    }

    public function authors(Builder $builder, $value)
    {
        $builder->where(self::AUTHORS, 'like', "%{$value}%");
    }

    public function publications(Builder $builder, $value)
    {
        $builder->where(self::PUBLICATIONS, 'like', "%{$value}%");
    }

    public function requirements(Builder $builder, $value)
    {
        $builder->where(self::REQUIREMENTS, 'like', "%{$value}%");
    }

    public function practicalApplication(Builder $builder, $value)
    {
        $builder->where(self::PRACTICAL_APPLICATION, 'like', "%{$value}%");
    }

    public function versionHistory(Builder $builder, $value)
    {
        $builder->where(self::VERSION_HISTORY, 'like', "%{$value}%");
    }

    public function demoVideos(Builder $builder, $value)
    {
        $builder->where(self::DEMO_VIDEOS, 'like', "%{$value}%");
    }

    public function softwareLink(Builder $builder, $value)
    {
        $builder->where(self::SOFTWARE_LINK, 'like', "%{$value}%");
    }

    public function documentationLink(Builder $builder, $value)
    {
        $builder->where(self::DOCUMENTATION_LINK, 'like', "%{$value}%");
    }

    public function githubLink(Builder $builder, $value)
    {
        $builder->where(self::GITHUB_LINK, 'like', "%{$value}%");
    }
}
