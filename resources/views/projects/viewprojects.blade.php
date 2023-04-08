@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">

<!-- summernote -->
<link rel="stylesheet" href="{{asset('css/summernote-lite.min.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/js/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.2.1/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.2.1/lg-fullscreen.min.js"></script>


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Project Detail</h1>
      </div>
      <div class="col-sm-6 text-right">
        <ul class="row-team">
            <li>
                @if($project->owner?->image)
                    <img data-toggle="tooltip" data-placement="bottom" title="{{($project->owner?->name)}}" alt="Avatar" class="row-team-img" src="{{ asset('images/'.$project->owner?->image) }}">
                @else
                    <img data-toggle="tooltip" data-placement="bottom" title="{{($project->owner?->name)}}" src="{{asset('images/avatar5.png')}}" class="row-team-img" alt="User Image">
                @endif
            </li>
            @foreach($project->users() as $user)
                <li>
                    <img data-toggle="tooltip" data-placement="bottom" title="{{$user->name}}" src="{{asset('images/'.$user->image)}}" class="row-team-img" alt="User Image">
                </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 custom-margin">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <p class="card-title badge badge-warning">Developer: {{($project->owner?->name)}}</p>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" id="id" name="id" value="{{$project->id}}" hidden>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td><b>Project Name</b></td>
                                            <td>{{$project->name}}</td>

                                            <td><b>Status</b></td>
                                            <td>
                                                <span class="info-box-number">
                                                    @if($project->status == 0)
                                                    <span class="badge badge-secondary">Pending</span>
                                                    @elseif($project->status == 1)
                                                    <span class="badge badge-primary">On-Progress</span>
                                                    @elseif($project->status == 2)
                                                    <span class="badge badge-success">Done</span>
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>Start Date</b></td>
                                            <td>{{$project->start_date}}</td>

                                            <td><b>End Date</b></td>
                                            <td>{{$project->end_date}}</td>
                                        </tr>

                                        <tr>
                                            <td><b>Description</b></td>
                                            <td>{!! $project->description !!}</td>

                                            <td><b>Qa Team</b></td>
                                            <td class="qa-team">
                                                @foreach($project->users() as $user)
                                                    <li class="badge bg-primary">{{$user->name}}</li>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="col-lg-12 custom-margin">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <p class="card-title">Check List - Dev Stage</p>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" id="id" name="id" value="{{$project->id}}" hidden>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    {{-- Check List - Dev Stage --}}

                                    @include('projects.include.firstassignee')

                                    @include('projects.include.secondassignee')

                                    @include('projects.include.thirdassignee')

                                    {{-- Check List - Dev Stage --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row">

        <!-- Modal task save-->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Task For {{$project->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


                <div class="modal-body" id="tasktData">

                <input type="text" class="form-control" id="project_id" name="project_id" value="{{$project->id}}" hidden>

                <input type="text" class="form-control" id="login_id" name="login_id" value="{{(Auth::user()->id)}}" hidden>

                <input type="text" class="form-control" id="role_id" name="role_id" value="{{(Auth::user()->userrole)}}" hidden>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" name="task" id="task" class="form-control">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="0">To-Do</option>
                          <option value="1">Done</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <label>Screenshot</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="screenshot" name="screenshot">
                                    <label class="custom-file-label" for="screenshot">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Description</label>
                            <textarea id="description" name="description"></textarea>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="butsave">Save</button>
                  </div>

            </div>
          </div>
        </div>




        <!-- Modal task edit-->
        <div class="modal fade bd-example-modal-lg" id="editTask" tabindex="-1" role="dialog" aria-labelledby="editTaskLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editTaskLabel">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


                <div class="modal-body" id="ediTaskData">

                <input type="text" class="form-control" id="task_id" name="task_id" value="" hidden>
                <input type="text" class="form-control" id="projectid" name="projectid" value="" hidden>
                <input type="text" class="form-control" id="loginid" value="" hidden>
                <input type="text" class="form-control" id="roleid" value="" hidden>


                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" name="task_name" id="task_name" class="form-control">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="taskstatus" name="taskstatus">
                          <option value="0">To-Do</option>
                          <option value="1">Done</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Description</label>
                            <textarea id="taskdescription" name="taskdescription"></textarea>
                        </div>
                    </div>

                    <p></p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Developer Notes</label>
                            <textarea id="devnote" name="devnote"></textarea>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btntaskedit">Update</button>
                  </div>

            </div>
          </div>
        </div>

         <!-- Modal task delete-->
        <div class="modal fade" id="taskdeleteModal" tabindex="-1" role="dialog" aria-labelledby="taskdeleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="taskdeleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="{{ route('viewprojects.destroy','delete') }}" method="post">
                @method('delete')
                @csrf
                 <div class="modal-body">
                    <p>
                        Are you sure you want to delete this?
                    </p>
                    <input type="hidden" class="form-control" id="delete_id" name="delete_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
              </form>

            </div>
          </div>
        </div>


        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Task List</h3>

                <div class="card-tools">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <i class="fas fa-tasks"></i> Add New Task
                    </button>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <table id="example1" class="table table-bordered table-striped tasks">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Screenshot</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($project->tasks as $task)
                        @if($task->role_id != 2)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                                <p>{!!$task->description!!}</p>
                                @if ($task->devnote)
                                    <small class="badge badge-warning">Developer Notes</small>
                                    <small>{!!$task->devnote!!}</small>
                                @endif
                            </td>
                            <td>
                                @if($task->screenshot)
                                <a href="{{asset ('images/task/'.$task->screenshot) }}">
                                    <img src="{{asset ('images/task/'.$task->screenshot) }}" alt="Screenshot" class="img-fluid task_img">
                                </a>
                                @else
                                    <img src="{{asset('images/task/task.png')}}" class="img-fluid task_img" alt="Avatar">
                                @endif
                            </td>

                            <td class="task-state">
                                @if($task->status == 0)
                                    <span class="badge badge-primary">To-Do</span>
                                @elseif($task->status == 1)
                                    <span class="badge badge-success">Done</span>
                                @endif
                            </td>

                            <td class="project-actions text-right">
                                <button class="btn btn-info btn-sm editBtn" data-toggle="modal" data-target="#editTask"
                                data-id="{{$task->id}}"
                                data-projectid="{{$task->project_id}}"
                                data-task="{{$task->task}}"
                                data-taskdescription="{{$task->description}}"
                                data-devnote="{{$task->devnote}}"
                                data-screenshot="{{$task->screenshot}}"
                                data-status="{{$task->status}}"
                                data-loginid="{{$task->login_id}}"
                                data-roleid="{{$task->role_id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm deleteTaskBtn" data-toggle="modal" data-target="#taskdeleteModal" data-deleteid="{{$task->id}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Screenshot</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-lg-12 text-center mt-4">
            <p><b>Final Check By</b></p>
            <div class="form-group col-4 m-auto">
                <select class="custom-select" id="lastassignee">
                    @foreach($qausers as $qauser)
                        <option value="{{$qauser->id}}" {{(optional($project->lastqasignee)->lastassignee == $qauser->id) ? 'selected' : null}} {{($project->lastqasignee) ? 'disabled' : null}}>{{$qauser->name}}</option>
                    @endforeach
                </select>

                <button id="finalCheckSave" type="button" class="btn bg-gradient-success mt-4 mb-4" {{($project->lastqasignee) ? 'disabled' : null}}>
                    <i class="fas fa-tasks"></i> Submit
                </button>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Task List</h3>

                <div class="card-tools">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" {{Auth::user()->userrole == 1 ? 'disabled' : null}}>
                        <i class="fas fa-tasks"></i> Add New Task
                    </button>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <table id="qatasktbl" class="table table-bordered table-striped tasks">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Screenshot</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($project->tasks as $task)
                            @if($task->role_id == 2)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>
                                    <p>{!!$task->description!!}</p>
                                    @if ($task->devnote)
                                        <small class="badge badge-warning">Developer Notes</small>
                                        <small>{!!$task->devnote!!}</small>
                                    @endif
                                </td>
                                <td>
                                    @if($task->screenshot)
                                        <a href="{{asset ('images/task/'.$task->screenshot) }}">
                                            <img src="{{asset ('images/task/'.$task->screenshot) }}" alt="Screenshot" class="img-fluid task_img">
                                        </a>
                                    @else
                                        <img src="{{asset('images/task/task.png')}}" class="img-fluid task_img" alt="Avatar">
                                    @endif
                                </td>

                                <td class="task-state">
                                    @if($task->status == 0)
                                        <span class="badge badge-primary">To-Do</span>
                                    @elseif($task->status == 1)
                                        <span class="badge badge-success">Done</span>
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    <button class="btn btn-info btn-sm editBtn" data-toggle="modal" data-target="#editTask"
                                    data-id="{{$task->id}}"
                                    data-projectid="{{$task->project_id}}"
                                    data-task="{{$task->task}}"
                                    data-taskdescription="{{$task->description}}"
                                    data-devnote="{{$task->devnote}}"
                                    data-screenshot="{{$task->screenshot}}"
                                    data-status="{{$task->status}}"
                                    data-loginid="{{$task->login_id}}"
                                    data-roleid="{{$task->role_id}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm deleteTaskBtn" data-toggle="modal" data-target="#taskdeleteModal" data-deleteid="{{$task->id}}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endif
                        @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Screenshot</th>
                                <th>Status</th>
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
<script src="{{asset('js/bs-custom-file-input.min.js')}}"></script>

<script src="{{asset('js/summernote-lite.min.js')}}" defer></script>

<script>
    //edit task details
    $('.editBtn').click(function() {
        var task_id = $(this).data('id');
        var projectid = $(this).data('projectid');
        var task_name = $(this).data('task');
        var taskdescription = $(this).data('taskdescription');
        var devnote = $(this).data('devnote');
        var taskstatus = $(this).data('status');
        var loginid = $(this).data('loginid');
        var roleid = $(this).data('roleid');

        $('#task_id').val(task_id);
        $('#projectid').val(projectid);
        $('#task_name').val(task_name);
        $('#taskdescription').summernote("code",taskdescription);
        $('#devnote').summernote("code",devnote);
        $('#taskstatus').val(taskstatus);
        $('#loginid').val(loginid);
        $('#roleid').val(roleid);
    });

    //delete task
    $('.deleteTaskBtn').click(function() {
        var delete_id = $(this).data('deleteid');
        $('#delete_id').val(delete_id);
    });

    // Summernote
      $(document).ready(function() {
        $('#description').summernote({
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
          });

        $('#taskdescription').summernote({
          setup: function (editor) {
              editor.on('change', function () {
                  editor.save();
              });
          }
        });

        $('#devnote').summernote({
          setup: function (editor) {
              editor.on('change', function () {
                  editor.save();
              });
          }
        });
      });

      //dataTable
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

      $("#qatasktbl").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      $(function () {
        bsCustomFileInput.init();
      });

      $("#example1").lightGallery({
        selector: 'a',
        subHtmlSelectorRelative: true
      });

      $("#qatasktbl").lightGallery({
        selector: 'a',
        subHtmlSelectorRelative: true
      });

</script>

<!-- save project details -->

<script src="{{asset('js/function/taskSave.js')}}"></script>
<script src="{{asset('js/function/taskEdit.js')}}"></script>
<script src="{{asset('js/function/devstageCheck.js')}}"></script>
<script src="{{asset('js/function/qacheckSave.js')}}"></script>
@endsection
