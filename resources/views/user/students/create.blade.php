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
            <form action="{{route('student.add')}}" method="POST">
                @csrf
                <div class="card shadow mb-4 p-4">
                    <div class="row mb-4">
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
                        <div class="col-md-8 mb-5">
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
                                                <label for="f_name" class="form-label small font-weight-bold">First Name <span class="text-danger">*</span></label>
                                                <input type="text" name="f_name" id="f_name" value="{{$f_name}}" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="l_name" class="form-label small font-weight-bold">Last Name <span class="text-danger">*</span></label>
                                                <input type="text" name="l_name" id="l_name" value="{{$l_name}}" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="age" class="form-label small font-weight-bold">Age <span class="text-danger">*</span></label>
                                                <input type="text" name="age" id="age" value="{{$age}}" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dob" class="form-label small font-weight-bold">D.O.B <span class="text-danger">*</span></label>
                                                <input type="date" name="dob" id="dob" value="{{$dob}}" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender" class="form-label small font-weight-bold">Gender <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm" name="gender" id="gender">
                                                    <option selected>{{$gender ? "male":'Select Gender'}}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blood_group" class="form-label small font-weight-bold">Blood Group <span class="text-danger">*</span></label>
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
                                                <label for="nationality" class="form-label small font-weight-bold">Nationality <span class="text-danger">*</span></label>
                                                <input type="text" name="nationality" id="nationality" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="m-0 font-weight-bold text-dark">Family Details</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_name" class="form-label small font-weight-bold">Father's Name <span class="text-danger">*</span></label>
                                                <input type="text" name="father_name" id="father_name" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_name" class="form-label small font-weight-bold">Mother's Name <span class="text-danger">*</span></label>
                                                <input type="text" name="mother_name" id="mother_name" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mob_num" class="form-label small font-weight-bold">Mobile Number <span class="text-danger">*</span></label>
                                                <input type="text" name="mob_num" id="mob_num" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label small font-weight-bold">E-mail <span class="text-danger">*</span></label>
                                                <input type="email" name="email" id="email" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emg_contact_name" class="form-label small font-weight-bold">Emergency Name <span class="text-danger">*</span></label>
                                                <input type="text" name="emg_contact_name" id="emg_contact_name" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emg_mob_num" class="form-label small font-weight-bold">Emergency No.<span class="text-danger">*</span></label>
                                                <input type="text" name="emg_mob_num" id="emg_mob_num" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="m-0 font-weight-bold text-dark">Contact Details</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 pb-1">
                                            <div class="form-group">
                                                <label for="address" class="form-label small font-weight-bold">Address <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="address" id="address" rows="3" class="w-100"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="country" class="form-label small font-weight-bold">Country<span class="text-danger">*</span></label>
                                                <input type="text" name="country" id="country" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="state" class="form-label small font-weight-bold">State <span class="text-danger">*</span></label>
                                                <input type="text" name="state" id="state" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="city" class="form-label small font-weight-bold">City<span class="text-danger">*</span></label>
                                                <input type="text" name="city" id="city" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pincode" class="form-label small font-weight-bold">Pincode<span class="text-danger">*</span></label>
                                                <input type="text" name="pincode" id="pincode" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adhar_num" class="form-label small font-weight-bold">Adhar Card No.<span class="text-danger">*</span></label>
                                                <input type="text" name="adhar_num" id="adhar_num" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="relation" class="form-label small font-weight-bold">Relation<span class="text-danger">*</span></label>
                                                <input type="text" name="relation" id="relation" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button type="submit" name="save" class="btn btn-primary" value="save">Save</button>
                        <button type="submit" name="draft" class="btn btn-info" value="draft">Save And Draft</button>
                        <a href="{{route('student.all')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->


@endsection