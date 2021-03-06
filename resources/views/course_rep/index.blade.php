@extends('layouts.course_rep.app')
@section('content')
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                        
                                
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <div class="send_message">
                                            <h5>Dashboard</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            


                            
                            <!-- end page title end breadcrumb -->
                            
                            <!--If there are no students in the class
                            <strong><p class="alert alert-danger"><code style="text-transform:capitalize; text-decoration:underline; color:black">{{ Auth::user()->name }},</code> you have to add students to the class first. <a class = "btn btn-default" href="/add">Add Students</a></p></strong>
                            -->
                            @if ( count($all_students) == 0)
                            <div>
                                <div class="card px-3 py-3 mx-3" style="background-color: white">
                                    <div class="text-center card-body">
                                        <code style="color: #283179"><h5>To proceed, kindly add in some students</h5></code>
                                        <a href="/course_rep/add"><button class="btn btn-primary">Add</button></a>
                                    </div>
                                </div>
                                
                            </div>
                            @else
                            <!--
                            <form style = "box-sizing: border-box" action="" method="POST">
                                {{ csrf_field() }}
                                @include('inc.messages')
                                <div>
                                <textarea id="textarea" name = "message" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                </div>
                                <input type="submit" class="form-group btn btn-primary" value="Send Message">
                            </form>-->
                            
                            <div class="row">
                                
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="ion-paper-airplane"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 align-self-center text-right">
                                                            <div class="m-l-10">
                                                                <h5 class="mt-0">2</h5>
                                                                <p class="mb-0 text-muted">Messages delivered<span class="badge bg-soft-success"><i class="badge badge-success mdi mdi-arrow-up"></i>2.35%</span></p>
                                                            </div>
                                                        </div>                                                                                          
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 29%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="mdi mdi-account-multiple-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 text-right align-self-center">
                                                            <div class="m-l-10 ">
                                                                <h5 class="mt-0">12</h5>
                                                                <p class="mb-0 text-muted">New User(s) added by you</p>
                                                            </div>
                                                        </div>                                                                                                                
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 23%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="search-type-arrow"></div>
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round ">
                                                                <i class="mdi mdi-message"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 align-self-center text-right">
                                                            <div class="m-l-10 ">
                                                                <h5 class="mt-0">10</h5>
                                                                <p class="mb-0 text-muted">Messages so far</p>
                                                            </div>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 29%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    
                                </div><!--end col-->

                                
                                </div><!--end col-->
                            </div><!--end row-->

                    </div>
                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-title alert alert-info text-center"><strong>Payment APIs to topup the App</strong></div>
                            
                            <div class="card-body text-center">
                                <p>Payment API will soon be added. Either <strong class="badge badge-primary">Paystack</strong> or <strong class="badge badge-success">Rave</strong></p>
                                <!--
                                <button class="btn btn-success">Donate to Gabriel Akinyosoye</button>
                            </div>
                            -->
                        </div>

                    </div>
                    @endif
                    
                    
                </div><!-- container -->

        </div> <!-- Page content Wrapper -->

                <!-- content -->
@endsection