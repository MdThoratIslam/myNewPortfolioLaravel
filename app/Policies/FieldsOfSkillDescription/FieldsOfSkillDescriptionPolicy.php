<?php

namespace App\Policies\FieldsOfSkillDescription;

use App\Models\FieldsOfSkillDescription\FieldsOfSkillDescription;
use App\Models\User;

class FieldsOfSkillDescriptionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, FieldsOfSkillDescription $fieldsOfSkillDescription): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, FieldsOfSkillDescription $fieldsOfSkillDescription): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, FieldsOfSkillDescription $fieldsOfSkillDescription): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, FieldsOfSkillDescription $fieldsOfSkillDescription): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, FieldsOfSkillDescription $fieldsOfSkillDescription): bool
    {
        //
    }
}
