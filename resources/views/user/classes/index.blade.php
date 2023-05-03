@extends('user/layout')
@section('page_title','All | Classes')
@section('all clases','active')
@section('container')

    <!-- Begin Page Content -->
    <div>
        <div class="card bg-white rounded-0">
            <div class="container-fluid py-2">
                <!-- Page Heading -->
                <h1 class="h4 font-weight-bold text-black">All Classes</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a class="mclr" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item " aria-current="page">All Classes</li>
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
                            <h6 class="m-0 font-weight-bold text-dark">All Classes Info</h6>
                        </div>
                        <div class="col-6 text-right">
                            <h6 class="m-0 font-weight-bold text-dark"><button  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addClassModal">+ Add Class</button></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Class Name</th>
                                    <th>Class Name Numeric</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classes as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->class_name}}</td>
                                    <td>{{$data->class_numeric}}</td>
                                    <td>
                                        <div class="col-12">
                                            <div class="row">
                                                @foreach (json_decode($data->class_section) as $list)
                                                <div class="col-3 mb-2">
                                                    <small class="rounded-pill font-weight-bold bg-success px-4 p-1">{{$list}}</small>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input updateToggle" id="{{$data->class_id}}" {{ $data->status == 1 ? 'Checked' : '' }}>
                                            <label class="custom-control-label" for="{{$data->class_id}}"></label>
                                        </div>
                                    </td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a href="javascript:void(0);" onclick=edit_class(1)><i class="far fa-edit" style="color: #5721d4;"></i></a>
                                        <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
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



        <!-- Logout Modal-->
    <div class="modal fade" id="addClassModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Class</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="addClass">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="class_name">Class Name</label>
                            <input class="form-control" id="class_name" name="class_name" type="text" placeholder="Enter Class Name" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="class_numeric">Class Numeric</label>
                            <input class="form-control" id="class_numeric" name="class_numeric" type="text" placeholder="Enter Class Numeric" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label class="small mb-1" for="id_label_multiple">Class Section</label><br>
                        <select class="form-control js-example-basic-multiple js-states" name="class_section[]" id="id_label_multiple" multiple="multiple" style="width:100%;">
                            @foreach($sections as $data)
                            <option value="{{$data->section_name}}">{{$data->section_name}}</option>
                            @endforeach
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

    <script>

$(".js-example-basic-multiple").select2({
});

    // =========
    // Add Class 
    // =========

        $('#addClass').submit(function(e){
            e.preventDefault();
            // $('.field_error').html('');
            $.ajax({
                url:'{{route("class.add")}}',
                data:$('#addClass').serialize(),
                type:'post',
                success:function(result){
                if(result.status=="error"){
                    $.each(result.error,function(key,val){
                    jQuery('#'+key+'_error').html(val[0]);
                    });
                }
                
                if(result.status== true){
                    var gname = $("#addClass").find("input[name='class_name']").val();
                    $('#addClass')[0].reset();;
                    $('#addClassModal').modal('hide');
                    window.location = window.location;
                }
                }
            });
        });

    // =========
    // Edit Class 
    // =========

        function edit_class(id)
        {
            $.get('{{url("class/edit")}}/'+id, function(data, status){
                $('#id').val(id);
                $('#class_name').val(data.data.class_name);
                $('#class_numeric').val(data.data.class_numeric);
                $('#class_section').val(data.data.class_section);
                $('#addClassModal').modal('show');
            });

        }
    // =========
    // Delete Class 
    // =========

        function delete_patient(id)
        {
            var url= window.location.origin;
            $("#anchor").attr("href", url+'/patient_delete/'+id);
            $('#deleteModal').modal('show');
        }


        $('.updateToggle').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var class_id = $(this).attr('id'); 
            
            $.ajax({
                type: "Post",
                dataType: "json",
                url: '{{url("class/status")}}',
                data: {'status': status, 'class_id': class_id},
                success: function(data){
                console.log(data.success)
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