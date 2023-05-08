@extends('user/layout')
@section('page_title','Create | Student')
@section('all clases','active')
@section('container')


    <!-- Begin Page Content -->
    <div>
        <div class="card bg-white rounded-0">
            @include('user/partials/canvas')
            <div class="container-fluid py-2">
                <!-- Page Heading -->
                <h1 class="h4 font-weight-bold text-black">Student Addmission Form</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a class="mclr" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item " aria-current="page">All Student Addmission Form</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid py-3">

            <!-- DataTales Example -->
            <form action="" method="post">
                <div class="card shadow mb-4 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="m-0 font-weight-bold text-dark">Upload Profile</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="profile_img" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="m-0 font-weight-bold text-dark">Personal Details</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="f_name" class="form-label small font-weight-bold">First Name</label>
                                                <input type="text" name="f_name" id="f_name" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="l_name" class="form-label small font-weight-bold">Last Name</label>
                                                <input type="text" name="l_name" id="l_name" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="age" class="form-label small font-weight-bold">Age</label>
                                                <input type="text" name="age" id="age" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dob" class="form-label small font-weight-bold">D.O.B</label>
                                                <input type="date" name="dob" id="dob" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender" class="form-label small font-weight-bold">Gender</label>
                                                <select class="form-control form-control-sm" name="gender" id="gender">
                                                    <option default>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blood_group" class="form-label small font-weight-bold">Blood Group</label>
                                                <select class="form-control form-control-sm" name="blood_group" id="blood_group">
                                                    <option default>Select Blood Group</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nationality" class="form-label small font-weight-bold">Nationality</label>
                                                <input type="text" name="nationality" id="nationality" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->


@endsection