<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\category;

class visitorcontroller extends Controller
{
    public function index(){
    	$blogs = blog::with("user","category")->where("publication_status",1)->orderBy("id","desc")->take(6)->get();
    	$categories = category::where("publication_status",1)->get();
    	return view('frontend.register.login',[
    		"blogs"      => $blogs,
    		"categories" => $categories

    	]);
    }
}
