<?php
namespace App\Policies\AcademicQualification;
use App\Models\AcademicQualification\AcademicQualification;
use App\Models\User;
class AcademicQualificationPolicy
{
    public function viewAny(User $user): bool
    {
        //
    }
    public function view(User $user, AcademicQualification $academicQualification): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, AcademicQualification $academicQualification): bool
    {
        //
    }

    public function delete(User $user, AcademicQualification $academicQualification): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AcademicQualification $academicQualification): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AcademicQualification $academicQualification): bool
    {
        //
    }
}
