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
             <h3 class="card-title">Employee_details</h3>
            </div>
            <!-- /.card-header -->
            <h3>{{$data->id}}</h3>
            <h3>{{$data->product_name}}</h3>
            <h3>{{$data->product_code}}</h3>
            <h3>{{$data->product_size}}</h3>
            <h3>{{$data->product_description}}</h3>
            <h3><img src="{{ url('/upload/'.$data->product_image) }}" style="height: 150px; width: 150px;"></h3>
            <h3>{{$data->product_price}}</h3>
            <h3>{{$data->product_quantity}}</h3>
            <h3>{{$data->featured_product}}</h3>
            <h3>{{$data->popular_product}}</h3>
            <h3>{{$data->latest_product}}</h3>
            <h3>{{$data->status}}</h3>
       </div>
      </div>
    </div>
  </section>
  
  </div>
  <!-- /.content-wrapper -->
 @endsection