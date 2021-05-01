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
             <h3 class="card-title">Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if(session('message'))
            <p class="alert alert-success">
              {{session('message')}}
            </p>
            @endif
            <form method="post" action="{{url('/Product/update')}}" enctype="multipart/form-data">

                @csrf  
            
            
                <div class="form-group">
                  <input type="hidden" name="id" value="{{$data->id}}">
                    <label for="product_name">name</label>
                    
                    <input type="text" class="form-control" id="product_name" placeholder="" name="product_name" value={{"$data->product_name"}}>
                   </div>
                   <div class="form-group">
                    <label for="product_code">code</label>
                    <input type="text" class="form-control" id="product_code" placeholder="" name="product_code" value="{{$data->product_code}}">
                   </div>
                   <div class="form-group">
                    <label for="product_size">size</label>
                    <input type="text" class="form-control" id="product_size" placeholder="" name="product_size" value="{{$data->product_size}}">
                   </div>
                    <div class="form-group">
                      <label for="product_description">Description:</label>
                      <input type="text" class="form-control" id="product_description" placeholder="Enter description" name="product_description" value="{{$data->product_description}}">
                    </div>  
                    <div class="form-group">
                        <label for="product_image">Product Image:</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image" value="{{ url('/upload/'.$data->product_image) }}" style="height: 150px; width: 150px;">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_price">Price:</label>
                        <input type="text" class="form-control" id="product_price" placeholder="" name="product_price" value="{{$data->product_price}}">
                    </div>
                    <div class="form-group">
                        <label for="product_quantity">quantity:</label>
                        <input type="text" class="form-control" id="product_quantity" placeholder="" name="product_quantity" value="{{$data->product_quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="featured_product">featured product:</label>
                        <input type="text" class="form-control" id="featured_product" placeholder="" name="featured_product" value="{{$data->featured_product}}">
                    </div>
                    <div class="form-group">
                        <label for="popular_product">popular product</label>
                        <input type="text" class="form-control" id="popular_product" placeholder="" name="popular_product" value="{{$data->popular_product}}">
                    </div>
                    <div class="form-group">
                        <label for="latest_product">latest product</label>
                        <input type="text" class="form-control" id="latest_product" placeholder="" name="latest_product" value="{{$data->latest_product}}">
                    </div>
                    <div class="form-group">
                      <label for="status">status</label>
                      <input type="text" class="form-control" id="status" placeholder="" name="status" value="{{$data->status}}">
                  </div>   
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