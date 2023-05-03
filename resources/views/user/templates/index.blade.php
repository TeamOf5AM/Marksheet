@extends('user/layout')
@section('page_title','My | Portfolio Space')
@section('templates','active')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0 text-gray-800">Templates</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Basic Plan</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Basic Template</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><del class="text-xs">Rs 300</del> Free</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card position-absolute top-0 w-100 h-100" style="background:rgba(255,255,255,0.5);">
                    <p class="m-auto h5 mb-0 font-weight-bold text-gray-800">Comming Soon</p>
                </div>
                <div class="card-body" style="opacity:0.2;">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 py-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bronze</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rs 2,150</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card position-absolute top-0 w-100 h-100" style="background:rgba(255,255,255,0.5);">
                    <p class="m-auto h5 mb-0 font-weight-bold text-gray-800">Comming Soon</p>
                </div>
                <div class="card-body" style="opacity:0.2;">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 py-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bronze</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rs 2,150</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card position-absolute top-0 w-100 h-100" style="background:rgba(255,255,255,0.5);">
                    <p class="m-auto h5 mb-0 font-weight-bold text-gray-800">Comming Soon</p>
                </div>
                <div class="card-body" style="opacity:0.2;">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 py-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bronze</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rs 2,150</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 col-xl-9 col-md-6 mb-0 text-gray-800">My Portfolio</h1>
        <a href="{{'editportfolio'}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Edit My Portfolio</a>
        <a href="{{'createportfolio'}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Create My Portfolio</a>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body p-1">
                    <iframe src="https://mayank.getmyportfolio.space/" title="description" style="width:100%;height:47vh;"></iframe> 
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

@endsection