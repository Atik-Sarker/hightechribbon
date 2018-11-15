@extends('frontEnd.layouts.master')
@section('homepage')
    <section id="slider">
        <div class=" main-slider owl-carousel">
            @foreach($slider as $as=>$value)
            <div class="slider-item">
                <img src="{{asset($value->image)}}">
            </div>
            <!--slider-item end-->
            @endforeach
        </div>
        <!-- End Carousel -->
    </section>
    <!--Slider end-->

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
                        <a class="btn-button" href="{{url('/product/'.$value->code)}}">view details</a>
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
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
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
                        @foreach($contactInfos as $contactInfo)
                        <ul class="contact-link">
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <strong>Address</strong>
                                <p>{{ $contactInfo->address }}</p>
                                <!-- <p></p> -->
                            </li>
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <strong>Email</strong>
                                <p>{{ $contactInfo->email }}</p>
                                <!-- <p>info@hightechribbon.com</p> -->
                            </li>
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <strong>Phone</strong>
                                <p>{{ $contactInfo->phone }}</p>
                                <!-- <p></p> -->
                            </li>
                        </ul>
                        @endforeach
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