@extends('backend.pages.user.profile.index')
@section('profile-content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-default">
                <div class="d-flex p-5">
                    <div class="icon-md bg-secondary rounded-circle mr-3">
                        <i class="mdi mdi-account-plus-outline"></i>
                    </div>
                    <div class="text-left">
                        <span class="h2 d-block">890</span>
                        <p>New Users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-default">
                <div class="d-flex p-5">
                    <div class="icon-md bg-success rounded-circle mr-3">
                        <i class="mdi mdi-table-edit"></i>
                    </div>
                    <div class="text-left">
                        <span class="h2 d-block">350</span>
                        <p>Order Placed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-default">
                <div class="d-flex p-5">
                    <div class="icon-md bg-primary rounded-circle mr-3">
                        <i class="mdi mdi-content-save-edit-outline"></i>
                    </div>
                    <div class="text-left">
                        <span class="h2 d-block">1360</span>
                        <p>Total Sales</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-default">
                <div class="d-flex p-5">
                    <div class="icon-md bg-info rounded-circle mr-3">
                        <i class="mdi mdi-bell"></i>
                    </div>
                    <div class="text-left">
                        <span class="h2 d-block">$8930</span>
                        <p>Monthly Revenue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Notification -->
            <div class="card card-default" data-scroll-height="530">
                <div class="card-header">
                    <h2 class="mb-5">Notification</h2>
                </div>

                <div class="card-body slim-scroll">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                                <div class="media-sm-wrapper">
                                    <img src="images/user/user-sm-01.jpg" alt="User Image">
                                </div>
                                <div class="media-body">
                                    <span class="title">The stars are twinkling.</span>
                                    <p>Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                        at highly months do things on at.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                                <div class="media-sm-wrapper">
                                    <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </div>
                                <div class="media-body">
                                    <span class="title">This is a Japanese doll.</span>
                                    <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion
                                        perfectly ye
                                        consisted so.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                                <div class="media-sm-wrapper">
                                    <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </div>
                                <div class="media-body">
                                    <span class="title">Support Ticket</span>
                                    <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he
                                        an to he roof
                                        only.
                                        Music
                                        leave say doors him.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                                <div class="media-sm-wrapper">
                                    <img src="images/user/user-sm-04.jpg" alt="User Image">
                                </div>
                                <div class="media-body">
                                    <span class="title">New Order</span>
                                    <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection
                                        abilities the. As
                                        hastened
                                        oh
                                        produced prospect formerly up am.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- To Do list -->
            <div class="card card-default pb-4" id="todo">
                <div class="card-header mb-3">
                    <h2>To Do list</h2>

                    <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> Add task </a>
                </div>

                <div class="card-body" data-simplebar style="height: 385px;">
                    <div class="todo-single-item d-none" id="todo-input">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="todo-list" id="todo-list">
                        <div class="todo-single-item d-flex flex-row justify-content-between finished">
                            <i class="mdi"></i>
                            <span>Finish Dashboard UI Kit update</span>
                            <span class="badge badge-primary">Finished</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between current">
                            <i class="mdi"></i>
                            <span>Create new prototype for the landing page</span>
                            <span class="badge badge-primary">Today</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span> Add new Google Analytics code to all main files </span>
                            <span class="badge badge-danger">Yesterday</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span>Update parallax scroll on team page</span>
                            <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span>Update parallax scroll on team page</span>
                            <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span>Create online customer list book</span>
                            <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                            <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                            <i class="mdi"></i>
                            <span>Update parallax scroll on team page</span>
                            <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
