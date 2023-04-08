@extends('layouts.master')

@section('content')


<!-- Select2 -->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap4.min.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('css/summernote-lite.min.css')}}">

<!-- daterange picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">

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
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Project</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="form-group" hidden>
                    <label>Id</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $projects->id }}">
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="name" id="name" value="{{$projects->name}}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="0" {{ $projects->status == 0 ? 'selected' : '' }}>Pending</option>
                      <option value="1" {{ $projects->status == 1 ? 'selected' : '' }}>On-Progress</option>
                      <option value="2" {{ $projects->status == 2 ? 'selected' : '' }}>Done</option>
                    </select>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Start Date: </label>
                    <div id="sartdatepicker" class="input-group date">
                        <input class="form-control datetimepicker-input" type="text" name="start_date" id="start_date">
                        <span class="input-group-addon input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>End Date: </label>
                    <div id="enddatepicker" class="input-group date">
                        <input class="form-control datetimepicker-input" type="text" name="end_date" id="end_date">
                        <span class="input-group-addon input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Project Owner</label>
                    <select class="form-control" id="owner_id" name="owner_id">
                      @foreach($users as $user)
                        <option value="{{$user->id}}" {{ $projects->owner_id == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Team Members</label>
                    <div class="select2-purple">
                      <select class="select2" multiple="multiple" id="user_ids" name="user_ids[]" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" @foreach($projects->users() as $team){{ $team->id == $user->id ? 'selected' : '' }}@endforeach>{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <label>Description</label>
                 <textarea id="description" name="description" >{{$projects->description}}</textarea>
                </div>
              </div>
            </div>

            <div class="card-footer">
                <button type="button" class="btn btn-primary" id="butedit">Update</button>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<!-- Select2 -->
<script src="{{asset('js/select2.full.min.js')}}"></script>
<script src="{{asset('js/summernote-lite.min.js')}}"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



<script>
  $('.select2').select2();

  //Date picker
  $("#sartdatepicker").datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true,
        // setDate: {{ $projects->start_date}}
  }).datepicker('setDate', '{{ $projects->start_date}}');

  $("#enddatepicker").datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true
  }).datepicker('setDate', '{{ $projects->end_date}}');

  // Summernote
  $('#description').summernote({
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
  });
</script>


<!-- save project details -->

<script src="{{asset('js/function/projectEdit.js')}}"></script>
@endsection
