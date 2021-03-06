@extends('backEnd.layouts.master')
@section('title','Slider Manage')
@section('main_content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title">Manage slider information</h3>
      			<div class="short_button">
              <a href="{{url('editor/product/add')}}"><i class="fa fa-plus"></i>Add</a>
      			</div>
          </div>
          <!-- /.card-header -->
            <div class="card-body user-border">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($show_data as $key=>$value)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$value->code}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->price}}</td>
                  <td>{{$value->category}}</td>
                  <td>{!! html_entity_decode(substr($value->description,0,50)) !!}</td>
                  <td><img src="{{asset($value->image)}}" class="backEnd_image" alt=""></td>
                  <td> {{$value->status==1?'Active':'Inactive'}}</td>
                  <td>
                  	<ul class="action_buttons">
                  		<li>
                  			@if($value->status==1)
                  			<form action="{{url('editor/product/unpublished')}}" method="POST">
                  				@csrf
                  				<input type="hidden" name="hidden_id" value="{{$value->id}}">
                  				<button type="submit" class="thumbs_up" title="unpublished"><i class="fa fa-thumbs-up"></i></button>
                  			</form>
                  			@else
	                  			<form action="{{url('editor/product/published')}}" method="POST">
	                  				@csrf
	                  				<input type="hidden" name="hidden_id" value="{{$value->id}}">
	                  				<button type="submit" class="thumbs_down" title="published"><i class="fa fa-thumbs-down"></i></button>
	                  			</form>
                  			@endif
                  		</li>
                  		<li>
                  			<a class="edit_icon" href="{{url('editor/product/edit/'.$value->id)}}" title="Edit"><i class="fa fa-edit"></i></a>
                  		</li>
                  		<li>
                  			<form action="{{url('editor/product/delete')}}" method="POST">
                  				@csrf
                  				<input type="hidden" name="hidden_id" value="{{$value->id}}">
                  				<button type="submit" onclick="return confirm('Are you delete this manufacture')" class="trash_icon" title="Delete"><i class="fa fa-trash"></i></button>
                  			</form>
                  		</li>
                  	</ul>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection