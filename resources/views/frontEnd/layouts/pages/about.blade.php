@extends('frontEnd.layouts.master')
@section('aboutpage')
<section id="breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb">
                        <div class="bread-crumb-inner">
                            <h1>About us</h1>
                            <ul class="m-top20">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li>
                                    <div class="divider"></div>
                                </li>
                                <li><a>About us</a></li>
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
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <div class="about-text-area">
                        <h2>About High Tech</h2>
                        <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sit suscipit quis numquam quam veritatis impedit eveniet, repellendus sunt provident nostrum harum dicta nihil, ullam consequuntur hic officiis. Blanditiis, nulla.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique aut aperiam porro nisi ipsum, cum fuga, placeat ut voluptatum, rerum exercitationem aliquam, aspernatur at illo reprehenderit. Provident quos commodi voluptas!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur cum aliquid esse officia nam eaque hic iste fugit animi distinctio, sit doloremque, rerum, est suscipit beatae quia rem amet tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem possimus quae, voluptatum consequuntur, excepturi tenetur magnam quaerat temporibus impedit nostrum fuga earum eum dolorum repellat nulla sapiente quisquam odio.</p>
                        <a class="btn-button" href="">About details</a>
                    </div>
                </div>
                <!--col end-->
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="about-image">
                        <img src="{{'public/frontEnd/'}}/images/about-image.png" alt="">
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!--section end-->
    <section id="product" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Our products</h2>
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
            <div class="row">
                @foreach($commonProduct as $key=>$value)
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-item">
                        <img src="{{asset($value->image)}}" alt="">
                        <p>{{$value->name}}</p>
                        <a class="btn-button" href="{{url('product/'.$value->code)}}">view details</a>
                    </div>
                </div>
                <!--col end-->
                @endforeach
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!--Product section end-->
@endsection