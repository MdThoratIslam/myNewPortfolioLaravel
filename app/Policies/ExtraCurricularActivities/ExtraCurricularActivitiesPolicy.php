<?php

namespace App\Policies\ExtraCurricularActivities;

use App\Models\ExtraCurricularActivities\ExtraCurricularActivities;
use App\Models\User;

class ExtraCurricularActivitiesPolicy
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
    public function view(User $user, ExtraCurricularActivities $extraCurricularActivities): bool
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
    public function update(User $user, ExtraCurricularActivities $extraCurricularActivities): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ExtraCurricularActivities $extraCurricularActivities): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ExtraCurricularActivities $extraCurricularActivities): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ExtraCurricularActivities $extraCurricularActivities): bool
    {
        //
    }
}
