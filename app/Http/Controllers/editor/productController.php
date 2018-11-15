<?php

namespace App\Http\Controllers\editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\categoryModel;
use App\productModel;
use File;
class productController extends Controller
{
    public function add(){
        $category = categoryModel::all();
    	return view('backEnd.product.add',[
            'category'=>$category,
        ]);
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'stock'=>'required',
    		'price'=>'required',
    		'contact'=>'required',
    		'description'=>'required',
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().'-'.$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/product/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new productModel();
    	$store_data->image = $fileUrl;
    	$store_data->name = $request->name;
    	$store_data->stock = $request->stock;
    	$store_data->code =  str_random(10);  
    	$store_data->price = $request->price;
    	$store_data->contact = $request->contact;
    	$store_data->description = $request->description;
    	$store_data->category = $request->category;
    	$store_data->status = $request->status;
    	$store_data->save();
        Toastr::success('message', 'Product information add successfully!');
    	return redirect('/editor/product/manage');
    }
    public function manage(){
    	$show_data = productModel::all();
        return view('backEnd.product.manage', [
            'show_data'=> $show_data,
        ]);
    }
    public function edit($id){
         $category = categoryModel::all();
        $edit_data = productModel::find($id);
        return view('backEnd.product.edit', ['edit_data'=>$edit_data,'category'=>$category]);
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = productModel::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
            File::delete(public_path().'public/upload/product',$update_data->image);
           $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $uploadPath = 'public/uploads/product/';
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->stock = $request->stock;
    	$update_data->price = $request->price;
    	$update_data->contact = $request->contact;
    	$update_data->description = $request->description;
    	$update_data->category = $request->category;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Product information update successfully!');
        return redirect('/editor/product/manage');
    }

    public function unpublished(Request $request){
        $unpublish_data = productModel::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Product information uppublished successfully!');
        return redirect('/editor/product/manage');
    }

    public function published(Request $request){
        $publishId = productModel::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Product information uppublished successfully!');
        return redirect('/editor/product/manage');
    }
     public function destroy(Request $request){
        $deleteId = productModel::find($request->hidden_id);
        $deleteId->delete();
        Toastr::success('message', 'Product information delete successfully!');
        return redirect('/editor/product/manage');
    }
}
