<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\blog;
use App\User;
use Auth;

class blogcontroller extends Controller
{
    // public function all_post()
    // {
    // 	$category = category::with("blogs")->get();
    // 	return $category;
    // }
	public function index()
	{
		return view("admin.blog.add_blog",[
			"categories" => category::where("publication_status",1)->get()

		]);
	}

	public function save_blog(Request $request)
	{
          $this->validate($request, [
            'blog_title' => 'required |min:5 |max:100',
            'blog_description' => 'required |min:15 |max:700',
            'blog_image' => 'required',
            'category_id' => 'required',
            'publication_status' => 'required',
        ]);
          blog::savebloginfo($request);
          return redirect('add-blog')->with("message","blog saved successfully!");

    }

    public function manage_blog()
    { 
    	$blogs = blog::with("user","category")->get();
    	return view("admin.blog.manage_blog",[
    		"blogs" =>$blogs
    	]);
    }

    public function delete_blog($id)
    {
        blog::deletebloginfo($id);
        return redirect('manage-blog')->with("message","blog deleled successfully");
    }

    public function edit_blog($id)
    {
        return view("admin.blog.edit_blog",[
            "category" => category::where("publication_status",1)->get(),
            "blog"     => blog::find($id)
        ]);
    }

    public function update_blog(Request $request)
    {
          $this->validate($request, [
            'blog_title' => 'required |min:5 |max:100',
            'blog_description' => 'required |min:15 |max:700',
            'category_id' => 'required',
            'publication_status' => 'required',
        ]);   
        blog::updatebloginfo($request);
        return redirect('manage-blog')->with('message','blog updated successfully!!');
        
    }

}
