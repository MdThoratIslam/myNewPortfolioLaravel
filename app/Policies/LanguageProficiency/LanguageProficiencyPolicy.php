<?php

namespace App\Policies\LanguageProficiency;

use App\Models\LanguageProficiency\LanguageProficiency;
use App\Models\User;

class LanguageProficiencyPolicy
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
    public function view(User $user, LanguageProficiency $languageProficiency): bool
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
    public function update(User $user, LanguageProficiency $languageProficiency): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, LanguageProficiency $languageProficiency): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, LanguageProficiency $languageProficiency): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, LanguageProficiency $languageProficiency): bool
    {
        //
    }
}
