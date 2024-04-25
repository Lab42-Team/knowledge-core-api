<?php

namespace App\Providers;

use App\Models\Developments;
use App\Models\KnowledgeCore;
use App\Models\News;
use App\Models\Project;
use App\Models\User;
use App\Policies\DevelopmentsPolicy;
use App\Policies\KnowledgeCorePolicy;
use App\Policies\NewsPolicy;
use App\Policies\ProjectPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        KnowledgeCore::class => KnowledgeCorePolicy::class,
        Developments::class => DevelopmentsPolicy::class,
        News::class => NewsPolicy::class,
        Project::class => ProjectPolicy::class,
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
