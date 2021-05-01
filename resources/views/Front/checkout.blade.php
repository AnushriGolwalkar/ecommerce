@extends('Front.master')
@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form action="{{url('place_order')}}" method="post" class="personal-information">
                                    @csrf
                                    
                                    @foreach ($data as $data)
                                        
                                    
                                    <input type="hidden" name="product_name" value="{{$data->product_id}}">
                                    <input type="hidden" name="product_quantity" value="{{$data->product_quantity}}">
                                    <input type="hidden" name="product_name" value="{{$data->product_name}}">
                                    <input type="hidden" name="product_size" value="{{$data->product_size}}">
                                    <input type="hidden" name="product_image" value="{{$data->product_image}}">
                                    <input type="hidden" name="product_price" value="{{$data->product_price}}">
                                    @endforeach

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">
                                            name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label for="lastname" class="col-md-3 col-form-label">last name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="lastname" class="form-control">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email" class="form-control" value="{{Auth::User()->email}}" name="email">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group row">
                                        <div class="col-md-3"></div>
                                        {{-- <div class="col-md-6">
                                            <div class="check-box-inner pt-0">
                                                <div class="filter-check-box">
                                                    <input type="checkbox" id="20820">
                                                    <label for="20820">Receive offers from our partners</label>
                                                </div>
                                                <div class="filter-check-box">
                                                    <input type="checkbox" id="20821">
                                                    <label for="20821">Sign up for our newsletter</label>
                                                    <p class="pl-25">Be the First to Know. Sign up for
                                                        newsletter
                                                        today !</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-12">
                                            <div class="sign-btn text-right">
                                                <a href="#" class="btn theme-btn--dark1 btn--md">Continue</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Addresses
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">
                                        <form id="contact-form" class="p-0" action="place_order" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-md-3" for="firstName2">Name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="name" name="name"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3" for="address1">Address</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="address1" name="address"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-md-3" for="city">City</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="city" name="city" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <label class="col-md-3">State</label>
                                                <div class="col-md-6" >
                                                    <select class="form-control" name="state">
                                                        <option>-- please choose --</option>
                                                        <option value="AA">AA</option>
                                                        <option value="AE">AE</option>
                                                        <option value="AP">AP</option>
                                                        <option value="MP">MP</option>
                                                        <option value="UP">UP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="zip">Zip/Postal Code</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="zip" name="pincode" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <label class="col-md-3">Country</label>
                                                <div class="col-md-6" >
                                                    <select class="form-control" name="country">
                                                        <option>-- please choose --</option>
                                                        <option value="India">India</option>
                                                        <option value="US">United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="phone">Phone</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="phone" type="text" required="" name="phone">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="optional">
                                                        Optional
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>3</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Pay Online</label>
                                </div>
                                
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test7" name="payment_method" value="pay by cash on dilivery
                                    " >
                                    <label for="test7">Pay by Cash on Delivery</label>
                                </div>
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <?php $total_amount=0; ?>
                    @foreach($d as $d) 
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>{{$d->product_name}}</li>
                            <li>Quantity</li>
                        </ul>
                        <ul class="amount">
                            <li>Rs.{{$d->product_price*$d->product_quantity}}</li>
                            <li>{{$d->product_quantity}}</li>
                        </ul>
                    </li>
                    <?php $total_amount=$total_amount+($d->product_price*$d->product_quantity); ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total (tax excl.)</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <input type="text" name="grand_total" value="<?php echo $total_amount ?>">
                            <li><?php echo $total_amount; ?>=</li>
                            <li>Rs. 0</li>
                        </ul>
                    </li>
                    <li class="list-group-item text-center">
                        
                        {{-- <a href="{{url('place_order')}}" class="btn theme-btn--dark1 btn--md">Place Order</a> --}}
                        <input type="submit" class="btn theme-btn--dark1" name="place order" value="place order">
                    
                    </li>
                </ul>
            </form>
              
            </div>
        </div>
    </div>

</section>
<!-- product tab end -->
@endsection