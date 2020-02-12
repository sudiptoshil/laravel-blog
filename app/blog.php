<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class blog extends Model
{   
	protected $fillable =["category_id","user_id","blog_title","blog_description","blog_image","publication_status"];
	// for eloquent relationship----------
    public function user()
    {
    	return $this->belongsTo("App\User");
    }
    public function category()
    {
    	return $this->belongsTo("App\category");
    }

    //  end eloquent relation ship


    public static function savebloginfo($request)
    {
    	$image     =$request->file('blog_image');
        $imageName =$image->getClientOriginalName();
        $directory ='blog_image/';
        $image->move($directory,$imageName);
        $blog = new Blog();
        $blog->category_id        =$request->category_id;
        $blog->user_id            = Auth::User()->id;
        $blog->blog_title         =$request->blog_title;
        $blog->blog_description   =$request->blog_description;
        $blog->blog_image         = $directory.$imageName;
        $blog->publication_status =$request->publication_status;
        $blog->save();
    }

    public static function deletebloginfo($id)
    {
    	$blog  = blog::find($id);
        if (file_exists($blog->blog_image)) {
             unlink($blog->blog_image);
        }
       
        $blog->delete();
    }

    public static function updatebloginfo($request)
    {
        $blog_image =$request->file('blog_image');
        if ($blog_image) 
        {
            $blog = blog::find($request->id);
            unlink($blog->blog_image);
            $imageName                =$blog_image->getClientOriginalName();
            $directory                ='blog_image/';
            $blog_image->move($directory,$imageName);
            $blog->category_id        =$request->category_id;
            $blog->user_id            = Auth::User()->id;
            $blog->blog_title         =$request->blog_title;
            $blog->blog_description   =$request->blog_description;
           
            $blog->blog_image         = $directory.$imageName;
            $blog->publication_status =$request->publication_status;
            $blog->save();
        

        } 
        else
        {    
            $blog = blog::find($request->id);
            $blog->category_id        =$request->category_id;
            $blog->blog_title         =$request->blog_title;
            $blog->blog_description   =$request->blog_description;
            $blog->publication_status =$request->publication_status;
            $blog->save();

            
        }
    }
}
