<?php

namespace App\Http\Controllers\frontEnd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\logoModel;
use App\sliderModel;
use App\productModel;
use App\categoryModel;
use App\Contact;
class frontEndController extends Controller
{
    public function index(){
    	$logo = logoModel::where('status',1)
    	->limit(1,0)
    	->orderBy('id','DESC')
    	->get();
    	$slider = sliderModel::where('status',1)
    	->orderBy('id','DESC')
    	->get();
    	$commonProduct = productModel::where('status',1)
    	->limit(8)
    	->get();
         $category = categoryModel::where('status',1)
        ->get();

        $contactInfos = Contact::where('status', true)->orderBy('created_at','desc')->limit(1)->get();

        // return $contactInfos;

    	return view('frontEnd.index',[
    		'logo'=>$logo,
    		'slider'=>$slider,
            'commonProduct'=>$commonProduct,
    		'category'=>$category,
    	], compact('contactInfos'));
    }
    public function about(){
        $logo = logoModel::where('status',1)
        ->limit(1,0)
        ->orderBy('id','DESC')
        ->get();
        $commonProduct = productModel::where('status',1)
        ->orderBy('id','DESC')
        ->limit(8)
        ->get();
         $category = categoryModel::where('status',1)
        ->get();
        return view('frontEnd.layouts.pages.about',[
            'logo'=>$logo,
            'commonProduct'=>$commonProduct,
            'category'=>$category,

        ]);

    }
    public function category($category){
        $logo = logoModel::where('status',1)
        ->limit(1,0)
        ->orderBy('id','DESC')
        ->get();
        $categoryproduct = productModel::where('category',$category)
        ->orderBy('id','DESC')
        ->limit(1)
        ->get();
         $category = categoryModel::where('status',1)
        ->get();
        return view('frontEnd.layouts.pages.category',[
            'logo'=>$logo,
            'categoryproduct'=>$categoryproduct,
            'category'=>$category,
        ]);

    }
    public function details($code){
    	$logo = logoModel::where('status',1)
    	->limit(1,0)
    	->orderBy('id','DESC')
    	->get();
         $category = categoryModel::where('status',1)
        ->get();
        $latestProduct = productModel::where('status',1)
        ->orderBy('id','DESC')
        ->limit(3,0)
        ->get();
        $product_info = productModel::where('code',$code)->first();
    	return view('frontEnd.layouts.pages.details',[
    		'logo'=>$logo,
    		'product_info'=>$product_info,
            'category'=>$category,
            'latestProduct'=>$latestProduct,
    	]);

    }
    public function contact(){
        $logo = logoModel::where('status',1)
        ->limit(1,0)
        ->orderBy('id','DESC')
        ->get();
         $category = categoryModel::where('status',1)
        ->get();
        return view('frontEnd.layouts.pages.contact',[
            'logo'=>$logo,
            'category'=>$category,
        ]);
    }
}
