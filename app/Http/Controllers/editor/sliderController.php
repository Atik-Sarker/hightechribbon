<?php

namespace App\Http\Controllers\editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\sliderModel;
use File;
class sliderController extends Controller
{
    public function add(){
    	return view('backEnd.slider.add');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().'-'.$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/slider/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new sliderModel();
    	$store_data->image = $fileUrl;
    	$store_data->status = $request->status;
    	$store_data->save();
        Toastr::success('message', 'slider  add successfully!');
    	return redirect('/editor/slider/manage');
    }
    public function manage(){
    	$show_data = sliderModel::all();
        return view('backEnd.slider.manage', [
            'show_data'=> $show_data,
        ]);
    }
    public function edit($id){
        $edit_data = sliderModel::find($id);
        return view('backEnd.slider.edit', ['edit_data'=>$edit_data]);
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = sliderModel::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
            File::delete(public_path().'public/upload/slider',$update_data->image);
           $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $uploadPath = 'public/uploads/slider/';
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Slider  update successfully!');
        return redirect('/editor/slider/manage');
    }

    public function unpublished(Request $request){
        $unpublish_data = sliderModel::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Slider  uppublished successfully!');
        return redirect('/editor/slider/manage');
    }

    public function published(Request $request){
        $publishId = sliderModel::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Slider  uppublished successfully!');
        return redirect('/editor/slider/manage');
    }
     public function destroy(Request $request){
        $deleteId = sliderModel::find($request->hidden_id);
        $deleteId->delete();
        Toastr::success('message', 'Slider  delete successfully!');
        return redirect('/editor/slider/manage');
    }
}
