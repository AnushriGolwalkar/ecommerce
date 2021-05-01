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
                      <th scope="col">Product Name:</th>
                      <th scope="col">Product code</th>
                      <th scope="col">product size</th>
                      <th scope="col">product description</th>
                      <th scope="col">product image</th>
                      <th scope="col">product price</th>
                      <th scope="col">product quantity</th>
                      <th scope="col">featured product</th>
                      <th scope="col">popular product</th>
                      <th scope="col">latest product</th>
                      <th scope="col">status</th>
                      <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $a)
                  <tr>
                      <td scope="row">{{$a->id}}</td>
                      <td>{{$a->product_name}}</td>
                      <td>{{$a->product_code}}</td>
                      <td>{{$a->product_size}}</td>
                      <td>{{$a->product_description}}</td>
                      
                      <td><img src="{{ url('/upload/'.$a->product_image) }}" style="height: 150px; width: 150px; "></td>
                      <td>{{$a->product_price}}</td>
                      <td>{{$a->product_quantity}}</td>
                      <td>{{$a->featured_product}}</td>
                      <td>{{$a->popular_product}}</td>
                      <td>{{$a->latest_product}}</td>
                      <td>{{$a->status}}</td>
                      <td>
                          <a href="{{url('Product/view'.$a->id)}}" class="btn btn-info">view</a>
                          <a href="{{url('Product/edit'.$a->id)}}" class="btn btn-primary">edit</a>
                          <a href="{{url('Product/delete'.$a->id)}}" class="btn btn-danger">delete</a>
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