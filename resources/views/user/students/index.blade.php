@extends('user/layout')
@section('page_title','All | Studentss')
@section('all clases','active')
@section('container')

    <!-- Begin Page Content -->
    <div>
        <div class="card bg-white rounded-0">
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
                            <h6 class="m-0 font-weight-bold text-dark"><button  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addStudentModal">+ Add Student</button></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Student Details</th>
                                    <th>Family Details</th>
                                    <th>Contact Details</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <small>
                                            <b>Name : </b><span>{{$data->first_name}} {{$data->last_name}}</span><br/>
                                            <b>Roll Num : </b><span>{{$data->student_roll_num}}</span><br/>
                                            <b>Adhar Num : </b><span>{{$data->adhar_num}}</span><br/>
                                            <b>Age : </b><span>{{$data->age}}</span><br/>
                                            <b>Gender : </b><span>{{$data->gender}}</span><br/>
                                            <b>Blood Group : </b><span>{{$data->blood_group}}</span><br/>
                                            <b>Nationality : </b><span>{{$data->nationality}}</span><br/>
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            <b>Father Name : </b><span>{{$data->father_name}}</span><br/>
                                            <b>Mother Name : </b><span>{{$data->mother_name}}</span><br/>
                                            <b>Mob Num : </b><span>{{$data->mob_num}}</span><br/>
                                            <b>Age : </b><span>{{$data->adhar_num}}</span><br/>
                                            <b>Gender : </b><span>{{$data->gender}}</span><br/>
                                            <b>Blood Group : </b><span>{{$data->blood_group}}</span><br/>
                                            <b>Nationality : </b><span>{{$data->nationality}}</span><br/>
                                        </small>
                                    </td>
                                    <td>{{$data->address}}</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input updateToggle" id="{{$data->subject_id}}" {{ $data->status == 1 ? 'Checked' : '' }}>
                                            <label class="custom-control-label" for="{{$data->subject_id}}"></label>
                                        </div>
                                    </td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a href="javascript:void(0);" onclick=edit_subject({{"$data->subject_id"}})><i class="far fa-edit" style="color: #5721d4;"></i></a>
                                        <a href="javascript:void(0);" onclick=delete_subject({{"$data->subject_id"}})><i class="far fa-trash-alt text-danger"></i></a>
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



        <!-- Add Class Modal-->
    <div class="modal fade" id="addStudentModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Subject</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="addSubject">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="subject_name">Subject Name</label>
                            <input class="form-control" id="subject_name" name="subject_name" type="text" placeholder="Enter Subject Name" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="subject_code">Subject Code</label>
                            <input class="form-control" id="subject_code" name="subject_code" type="text" placeholder="Enter Subject Code" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="id_label_single">Class</label><br>
                            <select class="form-control js-example-placeholder-multiple" name="class_id[]" multiple="multiple" id="id_label_single" style="width:100%;">

                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="id" value="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    @include('user/partials/delete')

    <script>

        $( document ).ready(function() {
            $(".js-example-placeholder-multiple").select2({
                placeholder: "Select Class",
                allowClear: true
            });
        });

    // =========
    // Add Class 
    // =========

        $('#addSubject').submit(function(e){
            e.preventDefault();
            // $('.field_error').html('');
            $.ajax({
                url:'{{route("subject.add")}}',
                data:$('#addSubject').serialize(),
                type:'post',
                success:function(result){
                if(result.status=="error"){
                    $.each(result.error,function(key,val){
                    jQuery('#'+key+'_error').html(val[0]);
                    });
                }
                
                if(result.status== true){
                    $('#addSubject')[0].reset();;
                    $('#addStudentModal').modal('hide');
                    window.location = window.location;
                }
                }
            });
        });

    // =========
    // Edit Class 
    // =========

        function edit_subject(id)
        {
            $.get('{{url("class/edit")}}/'+id, function(data, status){
                $('#id').val(id);
                $('#class_name').val(data.data.class_name);
                $('#class_numeric').val(data.data.class_numeric);
                const res = JSON.parse(data.data.class_section);
                // res.forEach(myClassSection);
                $(".js-example-basic-multiple").select2('destroy');
                $(".js-example-basic-multiple").select2({ data: res });
                // $(".js-example-basic-multiple").select2();
                // setTimeout(function(){
                //     console.log('hello');
                // },5000)
                $('#addStudentModal').modal('show');
            });

        }
        function myClassSection(item, index) {
           $(`#${item}`).attr('selected',true);
        }
    // =========
    // Delete Class 
    // =========

        function delete_subject(id)
        {
            var url= window.location.origin;
            $("#anchorDelete").attr("href", url+'/subject/delete/'+id);
            $('#deleteModal').modal('show');
        }


        $('.updateToggle').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var subject_id = $(this).attr('id'); 
            
            $.ajax({
                type: "Post",
                dataType: "json",
                url: '{{url("subject/status")}}',
                data: {'status': status, 'subject_id': subject_id , "_token": "{{ csrf_token() }}",},
                success: function(data){
                toastr.success('Subject Status Updated');
                }
            });
        })



$(window).ready(function(){
    $('#toast').toast('show');
    setTimeout(() => {
            $('#appointment').modal('show');
    },1000);
});
</script>


@endsection