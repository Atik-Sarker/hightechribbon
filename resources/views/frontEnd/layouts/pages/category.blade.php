@extends('frontEnd.layouts.master')
@section('aboutpage')
<section id="breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb">
                        <div class="bread-crumb-inner">
                            <h1>{{request()->segment(2)}}</h1>
                            <ul class="m-top20">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li>
                                    <div class="divider"></div>
                                </li>
                                <li><a>{{request()->segment(2)}}</a></li>
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
    <section id="product" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>{{request()->segment(2)}}</h2>
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
            <div class="row">
                @foreach($categoryproduct as $key=>$value)
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom-paginate">
                        
                    </div>
                </div>
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!--Product section end-->
@endsection