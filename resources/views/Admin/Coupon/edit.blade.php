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
             <h3 class="card-title">Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if(session('message'))
            <p class="alert alert-success">
              {{session('message')}}
            </p>
            @endif
            <form method="post" action="{{url('/Coupon/update')}}" enctype="multipart/form-data">

                @csrf  
                <div class="form-group">
                    <label for="coupon_code">coupon code:</label>
                    <input type="text" class="form-control" id="coupon_code" placeholder="" name="coupon_code" value="{{$data->coupon_code}}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div>
                  <div class="form-group">
                    <label for="">amount:</label>
                    <input type="text" class="form-control" id="amount" placeholder="" name="amount" value="{{$data->amount}}">
                  </div>
                  <div class="form-group">
                    <label for="">Amount type:</label>
                    <select name="amount_type" id="amount_type" class="form-control" >
                        <option value="percentage">percentage</option>
                        <option value="fixed">Fixed</option>
                    </select>
    
                  </div>
                  <div class="form-group">
                    <label for="expiry_date">Expiry Date:</label>
                    <input type="text" class="form-control" id="expiry_date" placeholder="" name="expiry_date" value="{{$data->expiry_date}}">
                  </div>
                  <div class="form-group">
                    <label for="status">status:</label>
                    <input type="text" class="form-control" id="status" placeholder="" name="status" value="{{$data->status}}">
                  </div>
                      
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            
                
        </div>
      </div>
    </div>
  </section>
  
  </div>
  <!-- /.content-wrapper -->
 @endsection