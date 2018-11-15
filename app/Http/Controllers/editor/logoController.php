<?php

namespace App\Http\Controllers\editor;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\logoModel;
use File;
class logoController extends Controller
{
    public function add(){
    	return view('backEnd.logo.add');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time() . '-' . $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/logo/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new logoModel();
    	$store_data->image = $fileUrl;
    	$store_data->status = $request->status;
    	$store_data->save();
        Toastr::success('message', 'Logo  add successfully!');
    	return redirect('/editor/logo/manage');
    }
    public function manage(){
    	$show_data = logoModel::all();
        return view('backEnd.logo.manage', [
            'show_data'=> $show_data,
        ]);
    }
    public function edit($id){
        $edit_data = logoModel::find($id);
        return view('backEnd.logo.edit', ['edit_data'=>$edit_data]);
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = logoModel::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
           File::delete(public_path() . '/public/uploads/logo/', $update_data->image);
           $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $uploadPath = 'public/uploads/logo/';
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Logo  update successfully!');
        return redirect('/editor/logo/manage');
    }

    public function unpublished(Request $request){
        $unpublish_data = logoModel::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Logo  uppublished successfully!');
        return redirect('/editor/logo/manage');
    }

    public function published(Request $request){
        $publishId = logoModel::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Logo  uppublished successfully!');
        return redirect('/editor/logo/manage');
    }
     public function destroy(Request $request){
        $deleteId = logoModel::find($request->hidden_id);
        $deleteId->delete();
        Toastr::success('message', 'Logo  delete successfully!');
        return redirect('/editor/logo/manage');
    }
}
