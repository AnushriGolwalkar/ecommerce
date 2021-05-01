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
             <center><p>Category</p></center>
            </div>
            <!-- /.card-header -->
            @if(session('message'))
            <p class="alert alert-success">
              {{session('message')}}
            </p>
            @endif
              <table class="table">
                <thead>
                  <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name:</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $a)
                  <tr>
                      <td scope="row">{{$a->id}}</td>
                      <td>{{$a->name}}</td>
                      <td>{{$a->description}}</td>
                      <td><img src="{{ url('/upload/'.$a->image) }}" style="height: 150px; width: 150px; "></td>
                      <td>
                          <a href="{{url('Category/view'.$a->id)}}" class="btn btn-info">view</a>
                          <a href="{{url('Category/edit'.$a->id)}}" class="btn btn-primary">edit</a>
                          <a href="{{url('Category/delete'.$a->id)}}" class="btn btn-danger">delete</a>
                      </td>
                  </tr>
              
                  @endforeach   
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </section>
  
  </div>
  <!-- /.content-wrapper -->
 @endsection