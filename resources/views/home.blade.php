@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <!-- <div class="row">
      <div class="col-lg-12">
        <div class="callout callout-success">
          <h5>Welcome {{Auth::user()->name}} !</h5>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$projects}}</h3>

            <p>Total Projects</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{url('projects')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$user}}</h3>

            <p>Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{url('users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-warning">
            <div class="widget-user-image">
              @if(Auth::user()->image)
                <img src="{{asset('images/'.Auth::user()->image)}}" class="img-circle elevation-2 dashImg" alt="User Image">
              @else
                  <img src="{{asset('images/avatar5.png')}}" class="img-circle elevation-2 dashImg" alt="User Image">
              @endif
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
            <h5 class="widget-user-desc">Developer</h5>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Projects <span class="float-right badge bg-primary">{{$ownerprojects}}</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  Completed Projects <span class="float-right badge bg-success">{{$completedProj}}</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  On Progress Projects <span class="float-right badge bg-danger">{{$onprogressProj}}</span>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->

@endsection
