<?php

namespace App\Http\Controllers\editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\categoryModel;
class categoryController extends Controller
{
    public function add(){
    	return view('backEnd.category.add');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'status'=>'required',
    	]);

    	$store_data = new categoryModel();
    	$store_data->name = $request->name;
    	$store_data->status = $request->status;
    	$store_data->save();
        Toastr::success('message', 'Category add successfully!');
    	return redirect('/editor/category/manage');
    }
    public function manage(){
    	$show_data = categoryModel::all();
        return view('backEnd.category.manage', [
            'show_data'=> $show_data,
        ]);
    }
    public function edit($id){
        $edit_data = categoryModel::find($id);
        return view('backEnd.category.edit', ['edit_data'=>$edit_data]);
    }
     public function update(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'status'=>'required',
        ]);

        $update_data = categoryModel::find($request->hidden_id);
        $update_data->name = $request->name;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Category update successfully!');
        return redirect('/editor/category/manage');
    }

    public function unpublished(Request $request){
        $unpublish_data = categoryModel::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Category uppublished successfully!');
        return redirect('/editor/category/manage');
    }

    public function published(Request $request){
        $publishId = categoryModel::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Category uppublished successfully!');
        return redirect('/editor/category/manage');
    }
}
