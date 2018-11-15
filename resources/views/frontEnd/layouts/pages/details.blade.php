@extends('frontEnd.layouts.master')
@section('details')
<section id="breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb">
                        <div class="bread-crumb-inner">
                            <h1>Product Details</h1>
                            <ul class="m-top20">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li>
                                    <div class="divider"></div>
                                </li>
                                <li><a>Product Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--bread-crumb end-->
                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <section id="blog-details" class="section-padding single-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="blog-details section-padding">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="blog-details-img">
                                    <img src="{{asset($product_info->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="blog-details-info">
                                    <p class="product-name">{{$product_info->name}}</p>
                                    <p><strong>Product Code : </strong> {{$product_info->code}}</p>
                                    <p><strong>Stock : </strong> {{$product_info->stock}}</p>
                                    <p><strong>Price : </strong> {{$product_info->price}} BTD</p>
                                    <p><strong>Buy Now : </strong>Contact {{$product_info->contact}}</p>
                                </div>
                            </div>
                        </div>
                        <!--row end-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="product-description">
                                    <p class="product-des-title">{!! html_entity_decode($product_info->description)!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog item end-->
                </div>
                <!--col end-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="blog-sidebar">
                        <div class="blog-search">
                            <form action="">
                                <input class="form-control" type="text">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--search box end-->
                        <div class="sidebar-latestpost">
                            <h4 class="sidebar-title">Populer Product</h4>
                            @foreach($latestProduct as $key=>$value)
                            <div class="latestblog-item">
                                <div class="sidebar-latepost-img">
                                    <img src="{{asset($value->image)}}" alt="">
                                </div>
                                <div class="sidebar-latestpost-info">
                                    <a href="{{url('/product/'.$value->code)}}">{{$value->name}}</a>
                                </div>
                            </div>
                            @endforeach
                            <!--latest blog item end-->
                        </div>
                    </div>

                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
@endsection