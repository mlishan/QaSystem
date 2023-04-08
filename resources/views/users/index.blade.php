@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"></h1>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->

<!-- Modal delete-->
@include('users.deleteForm')

<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Users List</h3>

                <div class="card-tools">
                  <a class="btn btn-primary" href="{{ url('userregister') }}">
                    <i class="fas fa-users"></i> Add New User
                  </a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">       
                 <table id="example1" class="table table-bordered table-striped tasks">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                        
                          <td class="project-actions text-right">
                              <a class="btn btn-info btn-sm" href="{{url('edituser/'.$user->id)}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{$user->id}}">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </button>
                          </td>
                      </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
  </div>
</div>
<!-- /.content -->

<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>

<script>
    //delete project
    $('.btn-danger').click(function() {
        var id = $(this).data('id');  
        $('#id').val(id);  
    });

    //dataTable
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });
</script>
@endsection
