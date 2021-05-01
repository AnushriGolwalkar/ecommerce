@extends('Front.master')
@section('content')
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-3-column.html">Bags & Shoes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Originals Windbreaker Winter Jacket</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product-single start -->
<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <span class="badge badge-danger top-right">New</span>
                </div>
                <div class="product-sync-init mb-20">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ url('/upload/'.$product->product_image) }}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/2.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                     <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/3.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                     <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/4.jpg" alt="product-thumb">
                        </div>
                    </div> 
                    <!-- single-product end -->
                </div>

                {{-- <div class="product-sync-nav single-product">
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="assets/img/single-product/1.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="assets/img/single-product/2.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="assets/img/single-product/3.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="assets/img/single-product/4.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                </div> --}}
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">{{$product->product_name}}</h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                        class="far fa-edit"></i></span> Write a review</a>
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h6 class="product-price mr-20"><del class="del">{{$product->product_price}}</del>
                                <span class="onsale">Rs.900</span></h6>
                            <span class="badge position-static bg-dark rounded-0">Save 10%</span>
                        </div>
                        <p>{{$product->product_description}}</p>
                        
                    </div>
                    <form method="POST" action="{{url('addtocart')}}" >


                    @csrf

                    <input type="text" name="id" value="{{$product->id}}">

                        <input type="text" name="product_name" value="{{$product->product_name}}">

                        <input type="text" name="product_image" value="{{$product->product_image}}">

                        <input type="text" name="product_price" value="{{$product->product_price}}">

                                    
                    <div class="product-footer">
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                            <div class="count d-flex">
                                <input type="number" min="1" max="10" step="1" value="1" name="product quantity">
                                <div class="button-group" >
                                    <button type="button" class="count-btn increment"><i class="fas fa-chevron-up" ></i></button>
                                    <button type="button" class="count-btn decrement"><i class="fas fa-chevron-down" ></i></button>
                                </div>
                            </div>
                            <div>
                                   

                                    <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                        <span class="mr-2"><i class="ion-android-add"></i></span>
                                        Add to cart
                                    </button>

                                </form>
                            </div>
                        </div>
                        <div class="addto-whish-list">
                            <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                            <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                        </div>
                        <div class="pro-social-links mt-10">
                            <ul class="d-flex align-items-center">
                                <li class="share">Share</li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
@endsection