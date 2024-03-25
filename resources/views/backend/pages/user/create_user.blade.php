@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-12 col-sm-6">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="sub-title">
                            <i class="mdi mdi-account-plus text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row mb-6">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Input with success</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required>
                                    <div class="text-success small mt-1">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Input with info</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border-info" id="validationServer01" placeholder="First name" required>
                                    <div class="text-info small mt-1">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Input with warning</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border-warning" id="validationServer01" placeholder="First name" required>
                                    <div class="text-warning small mt-1">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Input with danger</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border-danger" id="validationServer01" placeholder="First name" required>
                                    <div class="text-danger small mt-1">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                            <button class="btn btn-light btn-pill" type="submit">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
