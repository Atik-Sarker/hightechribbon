@extends('backEnd.layouts.master')
@section('title','Product Add')
@section('main_content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
          <h3 class="card-title">Add product information</h3>
          <div class="short_button">
            <a href="{{url('/editor/product/manage')}}"><i class="fa fa-cogs"></i>Manage</a>
          </div>
      </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="custom-bg">
                    <form action="{{url('/editor/product/save')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- form-group end -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" name="stock" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" value="{{ old('stock') }}">

                                @if ($errors->has('stock'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('stock') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- form-group end -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" value="{{ old('price') }}">

                                @if ($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- form-group end -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" value="{{ old('contact') }}">

                                @if ($errors->has('contact'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- form-group end -->
                        <div class="col-sm-12">
                          <div class="form-group custom-textarea">
                                <label for="Picture">Description</label>
                                      <textarea name="description" class="textarea form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}"></textarea>

                                  @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                     </span>
                                     @endif
                                </div>
                       </div>
                   <!-- form-group end -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Image</label>
                                <input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ old('image') }}" accept="image/*">

                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- form-group end -->
                      <div class="col-sm-6">
                          <div class="form-group mrt-30">
                              <button type="submit" class="btn submit-button">submit</button>
                              <button type="reset" class="btn btn-default">clear</button>
                          </div>
                      </div>
                      <!-- /.form-group -->
                 </div>
                </div>
              </div>
            <!-- /.col -->
                <div class="col-md-4">
                      <div class="custom-bg">
                        <div class="custom-cart-title">
                          <strong>Publication Status</strong>
                        </div>
                
                        <div class="box-body pub-stat display-inline">
                            
                            <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" id="active" name="status" value="1">
                            <label for="active">Active</label>
                            @if ($errors->has('status'))
                            <span class="invalid-feedback">
                              <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                        </div>
                
                        <div class="box-body pub-stat display-inline">
                            <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" name="status" value="0" id="inactive">
                            <label for="inactive">Inactive</label>
                            @if ($errors->has('status'))
                            <span class="invalid-feedback">
                              <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                        </div>
                      </div>
                        <!--custom-bg end  -->
                      <div class="custom-bg mrt-30">
                        <div class="custom-cart-title">
                          <strong>Category</strong>
                        </div>
                        @foreach($category as $key=>$value)
                        <div class="box-body pub-stat display-block">
                            <input class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" type="radio" id="{{$value->name}}" name="category" value="{{$value->name}}">
                            <label for="{{$value->name}}">{{$value->name}}</label>
                            @if ($errors->has('category'))
                            <span class="invalid-feedback">
                              <strong>{{ $errors->first('category') }}</strong>
                            </span>
                            @endif
                        </div>
                        @endforeach
                      </div>
                    </div>
                </div>
              </form>
          </div>
        <!--card-body-->
      </div>
      <!--card-->
    </div>
  <!--container-fluid-->
  </section>
  <!-- /.content -->
@endsection