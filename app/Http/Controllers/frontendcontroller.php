<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\category;


class frontendcontroller extends Controller
{
    public function index()
    {   
    	$blogs = blog::with("user","category")->where("publication_status",1)->orderBy("id","desc")->take(6)->get();
    	$categories = category::where("publication_status",1)->get();
    	return view("frontend.home.home",[
    		"blogs"      => $blogs,
    		"categories" => $categories

    	
    	]);
    }

    	public function category_wise_blog($id)
    	{   
    		$categories = category::where("publication_status",1)->get();
    		$blogs       = blog::where("category_id",$id)->where("publication_status",1)->get();
    		
 
    		return view("frontend.home.category_wise_blog",[
    			"categories" => $categories,
    			"blogs"      => $blogs


    		]);
    	}
    

   
}
