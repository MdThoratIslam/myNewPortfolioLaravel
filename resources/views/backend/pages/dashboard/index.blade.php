@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <!-- Frist box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-secondary rounded-circle mr-3">
                            <i class="mdi mdi-account-plus-outline"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">{{$sql_event}}</span>
                            <p>New Users</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-success rounded-circle mr-3">
                            <i class="mdi mdi-table-edit"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">350</span>
                            <p>Order Placed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-primary rounded-circle mr-3">
                            <i class="mdi mdi-content-save-edit-outline"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">1360</span>
                            <p>Total Sales</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fourth box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-info rounded-circle mr-3">
                            <i class="mdi mdi-bell"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">$8930</span>
                            <p>Monthly Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <!-- Current Users  -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Current Users</h2>
                        <span>Realtime</span>
                    </div>
                    <div class="card-body">
                        <div id="barchartlg2"></div>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="text-uppercase">Current Users Overview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
