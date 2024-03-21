<?php

namespace App\Policies\ProfessionalQualification;

use App\Models\ProfessionalQualification\ProfessionalQualification;
use App\Models\User;

class ProfessionalQualificationPolicy
{
    public function viewAny(User $user): bool
    {
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProfessionalQualification $professionalQualification): bool
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
    public function update(User $user, ProfessionalQualification $professionalQualification): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProfessionalQualification $professionalQualification): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProfessionalQualification $professionalQualification): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProfessionalQualification $professionalQualification): bool
    {
        //
    }
}
