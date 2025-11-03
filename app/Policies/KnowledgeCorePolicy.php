<?php

namespace App\Policies;

use App\Models\KnowledgeCore;
use App\Models\User;

class KnowledgeCorePolicy
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
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param KnowledgeCore $knowledgeCore
     * @return bool
     */
    public function update(User $user, KnowledgeCore $knowledgeCore): bool
    {
        return $user->role === User::ADMIN_ROLE;
    }
}
