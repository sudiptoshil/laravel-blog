@extends("admin.admin_master")
@section("admin-home")
 <div class="row-fluid">
<div class="span12">
<!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
<div class="widget-title">
<h4><i class="icon-reorder"></i> add blog post</h4>
<span class="tools">
<a href="javascript:;" class="icon-chevron-down"></a>
<a href="javascript:;" class="icon-remove"></a>
</span>
</div>
<div class="widget-body">
	<h3 style="color: red" align="center">{{Session::get("message")}}</h3>
<!-- BEGIN FORM-->
<form action="{{route('save-blog')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
	@csrf
    <div class="control-group">
        <label class="control-label">blog title</label>
        <div class="controls">
            <input type="text" name="blog_title" class="input-xxlarge" />
            <h5 style="color: red">{{$errors->has("blog_title") ? $errors->first("blog_title") :""}}</h5>
            
        </div>
    </div>
  
    <div class="control-group">
        <label class="control-label">category name</label>
        <div class="controls">
            <select class="input-large m-wrap" name="category_id" tabindex="1">
            	@foreach($categories as $v_category)
                <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                @endforeach
                <h5 style="color: red">{{$errors->has("category_id") ? $errors->first("category_id") :""}}</h5>
            </select>
        </div>
    </div>

    
    <div class="control-group">
        <label class="control-label">blog description</label>
        <div class="controls">
            <textarea class="input-xxlarge" name="blog_description" rows="3"></textarea>
            <h5 style="color: red">{{$errors->has("blog_description") ? $errors->first("blog_description") :""}}</h5>
        </div>
    </div>

     <div class="control-group">
            <label class="control-label">publication status</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="publication_status" value="1" />
                    publish
                </label>
                <label class="radio">
                    <input type="radio" name="publication_status" value="0" checked />
                    unpublish
                </label>
                <h5 style="color: red">{{$errors->has("publication_status") ? $errors->first("publication_status") :""}}</h5>

                
            </div>
        </div>
        <div class="control-group">
        <label class="control-label">blog image</label>
        <div class="controls">
              <input type="file" name="blog_image">
               <h5 style="color: red">{{$errors->has("blog_image") ? $errors->first("blog_image") :""}}</h5>
            
        </div>
    </div>
       
    <div class="form-actions">
        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
        <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
    </div>
</form>
<!-- END FORM-->
</div>
</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
</div>
@endsection