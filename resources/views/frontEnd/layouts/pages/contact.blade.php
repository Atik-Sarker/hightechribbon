@extends('frontEnd.layouts.master')
@section('contactpage')
<section id="breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb">
                        <div class="bread-crumb-inner">
                            <h1>Contact us</h1>
                            <ul class="m-top20">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li>
                                    <div class="divider"></div>
                                </li>
                                <li><a>contact us</a></li>
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
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    @if ($show = Session::get('message'))
                           <div class="alert alert-success alert-block">
                              <button type="button" class="close" data-dismiss="alert">×</button> 
                               <strong>{{ $show }}</strong>
                            </div>
                      @endif
                    <form class="default-form contact-form" name="contact_form" action="{{url('visitor/contact')}}" method="POST">
                        @csrf
                        <div class="sec-title">
                            <h6>Send Message</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name"         name="name" type="text" placeholder="Name*">
                                   @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                     <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                   @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" id="contact_email" name="contact_email" type="text" placeholder="Email">
                                   @if ($errors->has('contact_email'))
                                    <span class="invalid-feedback">
                                     <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                                   @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('contact_phone') ? ' is-invalid' : '' }}" id="contact_phone" name="contact_phone" type="text" placeholder="Phone*">
                                   @if ($errors->has('contact_phone'))
                                    <span class="invalid-feedback">
                                     <strong>{{ $errors->first('contact_phone') }}</strong>
                                    </span>
                                   @endif
                                </div>
                                <div class="form-group">
                                   <textarea class="form-control{{ $errors->has('contact_text') ? ' is-invalid' : '' }}" rows="8" name="contact_text" placeholder="Message*"></textarea><br/>
                                   @if ($errors->has('contact_text'))
                                    <span class="invalid-feedback">
                                     <strong>{{ $errors->first('contact_text') }}</strong>
                                    </span>
                                   @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-style-one">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-text">
                        <div class="sec-title">
                            <h6>Contact Details</h6>
                            <p>Aliquam vitae mi a eros tincidunt ultricies. Donec porta gravida arcu. Morbi facilisis lorem felis, eu inerdum quam scelerisque eu inerdum quam scelerisque eu.</p>
                        </div>
                        <ul class="contact-link">
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <strong>Address</strong>
                                <p>2/1 Razzak Plaza (8th Floor), Eskaton Road, Dhaka-1217</p>
                            </li>
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <strong>Email</strong>
                                <p>info@hightechribbon.com</p>
                            </li>
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <strong>Phone</strong>
                                <p>+881711114361</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!--contact section end-->
@endsection