<?php

namespace App\Policies;

use App\Models\Developments;
use App\Models\User;

class DevelopmentsPolicy
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
     * @param Developments $developments
     * @return bool
     */
    public function view(User $user, Developments $developments): bool
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
     * @param Developments $developments
     * @return bool
     */
    public function update(User $user, Developments $developments): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Developments $developments
     * @return bool
     */
    public function delete(User $user, Developments $developments): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Developments $developments
     * @return bool
     */
    public function restore(User $user, Developments $developments): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Developments $developments
     * @return bool
     */
    public function forceDelete(User $user, Developments $developments): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }
}
