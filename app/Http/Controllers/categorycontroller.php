<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categorycontroller extends Controller
{
    public function index()
    {
    	return view("admin.category.add_category");
    }

    public function save_category(Request $request)
    {
    	category::savecategoryinfo($request);
    	return redirect("add-category")->with("message","category saved successfully!");	
    }

    public function manage_category()
    {
    	return view("admin.category.manage_category",[
    		"categories" => category::all()
    	]);
    }

    public function delete_category($id)
    {
    	category::deletecategoryinfo($id);
    	return redirect("manage-category")->with("message","category deleted successfully!");
    }

    public function edit_category($id)
    {
    	return view("admin.category.edit_category",[
    		"category" =>category::find($id)

    	]);
    }

    public  function update_category(Request $request)
    {
    	category::updatecategoryinfo($request);
    	return redirect("manage-category")->with("message","category updated successfully!");
    }

}
