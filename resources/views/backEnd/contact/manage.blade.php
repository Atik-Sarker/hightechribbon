@extends('backEnd.layouts.master')
@section('title','Category Manage')
@section('main_content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title">Manage Category information</h3>
            <div class="short_button">
              <a href="{{url('editor/contact/create')}}"><i class="fa fa-plus"></i>Add</a>
            </div>
          </div>
          <!-- /.card-header -->
            <div class="card-body user-border">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($contactInfos as $contactInfo)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$contactInfo->phone}}</td>
                  <td>{{$contactInfo->email}}</td>
                  <td>{{$contactInfo->address}}</td>
                  <td>{{$contactInfo->status==1?'Active':'Inactive'}}</td>
                  <td>
                    <ul class="action_buttons">
                      <li>
                        @if($contactInfo->status==1)
                        <form action="{{url('editor/contact/status',$contactInfo->id)}}" method="POST">
                          @csrf
                          <input type="hidden" name="status" value="0">
                          <button type="submit" class="thumbs_up" title="unpublished"><i class="fa fa-thumbs-down"></i></button>
                        </form>
                        @else
                          <form action="{{url('editor/contact/status',$contactInfo->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="thumbs_down" title="published"><i class="fa fa-thumbs-up"></i></button>
                          </form>
                        @endif
                      </li>
                      <li>
                        <a class="edit_icon" href="{{url('editor/contact/edit/'.$contactInfo->id)}}" title="Edit"><i class="fa fa-edit"></i></a>
                      </li>
                      <li>
                        <form action="{{url('editor/contact/delete',$contactInfo->id)}}" method="POST">
                          @csrf
                          <button type="submit" onclick="return confirm('Are you sure to delete this')" class="trash_icon" title="Delete"><i class="fa fa-trash"></i></button>
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