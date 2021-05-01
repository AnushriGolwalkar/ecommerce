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
                      <th scope="col">Coupon Code:</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Amount Type</th>
                      <th scope="col">Expiry Date</th>
                      <th scope="col">Status</th>
                      <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $a)
                  <tr>
                      <td scope="row">{{$a->id}}</td>
                      <td>{{$a->coupon_code}}</td>
                      <td>{{$a->amount}}</td>
                      <td>{{$a->amount_type}}</td>
                      <td>{{$a->expiry_date}}</td>
                      <td>{{$a->status}}</td>
                     
                      <td>
                          <a href="{{url('Coupon/view'.$a->id)}}" class="btn btn-info">view</a>
                          <a href="{{url('Coupon/edit'.$a->id)}}" class="btn btn-primary">edit</a>
                          <a href="{{url('Coupon/delete'.$a->id)}}" class="btn btn-danger">delete</a>
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