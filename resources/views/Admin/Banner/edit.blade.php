@extends('Admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!---code start--->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
             <h3 class="card-title">Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if(session('message'))
            <p class="alert alert-success">
              {{session('message')}}
            </p>
            @endif
            <form method="post" action="{{url('/Banner/update')}}" enctype="multipart/form-data">

                @csrf  
            
            
                <div class="form-group">
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <label for="title">Title</label>
                  
                  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$data->title}}">
                </div>
                <div class="form-group">
                    <label for="description">URL:</label>
                    <input type="text" class="form-control" id="url" placeholder="Enter url" name="url" value="{{$data->url}}">
                </div>
                <div class="form-group">
                  <img src="{{url('/upload/'.$data->image)}}" style="height: 150px; width: 150px; ">
           <br><input type="file" name="image" value="{{$data->image}}">       
            <br><br>
                <button type="submit" class="btn btn-primary">update</button>
              </form>
        </div>
      </div>
    </div>
  </section>
  
  </div>
  <!-- /.content-wrapper -->
 @endsection