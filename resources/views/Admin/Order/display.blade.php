@extends('Admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
     <!--/table-->
      <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product name</th>
                        <th>Product Quantity</th>
                        <th>Product image</th>
                        <th>Product Price</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $data)
                   <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->product_name}}</td>
                      <td>{{$data->product_quantity}}</td>
                      <td>
                        <img src="{{url('/upload/'.$data->product_image)}}" alt="img" value="" style="height: 150px; width:190px;">
                      </td>
                      <td>{{$data->product_price}}</td>
                  </tr>
                   @endforeach
                  
               </tbody>
            </table>
        </div>
      </div>

    </div>
    <!-- /.content-header -->
  </div>

<h1>Orders</h1>
@endsection