<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;

class NewsPolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param News $news
     * @return bool
     */
    public function view(User $user, News $news): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param News $news
     * @return bool
     */
    public function update(User $user, News $news): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param News $news
     * @return bool
     */
    public function delete(User $user, News $news): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param News $news
     * @return bool
     */
    public function restore(User $user, News $news): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param News $news
     * @return bool
     */
    public function forceDelete(User $user, News $news): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }
}
