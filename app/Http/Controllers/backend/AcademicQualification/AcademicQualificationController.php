<?php

namespace App\Http\Controllers\backend\AcademicQualification;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicQualification\StoreAcademicQualificationRequest;
use App\Http\Requests\AcademicQualification\UpdateAcademicQualificationRequest;
use App\Models\AcademicQualification\AcademicQualification;

class AcademicQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // All Academic Qualifications of the user will be shown here
        $academicQualifications = AcademicQualification::where('user_id', auth()->user()->id)->get();

        return view('backend.pages.user.profile.components.academic_dtails')->with('academicQualifications', $academicQualifications);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcademicQualificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademicQualification $academicQualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademicQualification $academicQualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademicQualificationRequest $request, AcademicQualification $academicQualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicQualification $academicQualification)
    {
        //
    }
}
