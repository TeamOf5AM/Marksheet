@extends('user/layout')
@section('page_title','All | Studentss')
@section('all clases','active')
@section('container')

    <!-- Begin Page Content -->
    <div>
        <div class="card bg-white rounded-0">
            @include('user/partials/canvas')
            <div class="container-fluid py-2">
                <!-- Page Heading -->
                <h1 class="h4 font-weight-bold text-black">All Students</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a class="mclr" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item " aria-current="page">All Students</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid py-3">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-dark">All Students Info</h6>
                        </div>
                        <div class="col-6 text-right">
                            <h6 class="m-0 font-weight-bold text-dark"><a  class="btn btn-sm btn-primary" href="{{route('student.create')}}">+ Add Student</a></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-gradient-primary small text-light">
                                <tr>
                                    <th># </th>
                                    <th>Student Details</th>
                                    <th>Family Details</th>
                                    <th>Contact Details</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key => $data)
                                <tr>
                                    <td>
                                        <small>
                                            {{$key+1}}
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            <b>Name : </b><span>{{$data->first_name}} {{$data->last_name}}</span><br/>
                                            <b>Roll Num : </b><span class="text-danger" onclick="openNav()" style="cursor:pointer;">{{$data->student_roll_num}}</span><br/>
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            <b>Father Name : </b><span>{{$data->father_name}}</span><br/>
                                            <b>Mother Name : </b><span>{{$data->mother_name}}</span><br/>
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            <b>Mob No. : </b><span>{{$data->mob_num}}</span><br/>
                                            <b>Email : </b><span>{{$data->email}}</span><br/>
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            <b>Address : </b><span>{{$data->address}}</span><br/>
                                            <b>City : </b><span>{{$data->city}}</span><br/>
                                        </small>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input updateToggle" id="{{$data->student_id}}"{{ $data->status == 1 ? 'Checked' : '' }}>
                                            <label class="custom-control-label" for="{{$data->student_id}}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{url('/student/edit/'.$data->student_id)}}"><i class="far fa-edit" style="color: #5721d4"></i></a>
                                        <a href="javascript:void(0)" onclick=delete_student({{$data->student_id}})><i class="far fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

    @include('user/partials/delete')

    

    <script>

        function openNav() {
        document.getElementById("mySidenav").style.width = "1000px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        }

        function delete_student(id)
        {
            var url= window.location.origin;
            $("#anchorDelete").attr("href", url+'/student/delete/'+id);
            $('#deleteModal').modal('show');
        }


        $('.updateToggle').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var student_id = $(this).attr('id'); 
            
            $.ajax({
                type: "Post",
                dataType: "json",
                url: '{{url("student/status")}}',
                data: {'status': status, 'student_id': student_id , "_token": "{{ csrf_token() }}",},
                success: function(data){
                toastr.success('Student Status Updated');
                }
            });
        })

</script>


@endsection