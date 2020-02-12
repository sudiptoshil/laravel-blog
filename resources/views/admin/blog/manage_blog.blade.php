@extends("admin.admin_master")
@section("admin-home")
<div class="row-fluid">
<div class="span12">
<!-- BEGIN BASIC PORTLET-->
<div class="widget orange">
<div class="widget-title">
<h4><i class="icon-reorder"></i> manage blog</h4>
<span class="tools">
<a href="javascript:;" class="icon-chevron-down"></a>
<a href="javascript:;" class="icon-remove"></a>
</span>
</div>
<div class="widget-body">
    <h3 align="center" style="color: red">{{Session::get("message")}}</h3>
<table class="table table-striped table-bordered table-advance table-hover">
    <thead>
    <tr>
        <th><i class="icon-bullhorn"></i> blog Title</th>
        <th class="hidden-phone"><i class="icon-question-sign"></i> blog Descrition</th>
        <th><i class="icon-bookmark"></i> category name</th>
        <th><i class="icon-bookmark"></i> user name</th>
        <th><i class="icon-bookmark"></i> blog image</th>
        <th><i class=" icon-edit"></i> Status</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    	@foreach($blogs as $v_blog)
    <tr>
        <td>{{$v_blog->blog_title}}</td>
        <td class="hidden-phone">{{$v_blog->blog_description}}</td>
        @if($v_blog->category)
        <td>{{$v_blog->category->category_name}}</td>
        @else
        <td>category not found</td>
        @endif
        @if($v_blog->user)
        <td>{{$v_blog->user->name}}</td>
        @else
        <td> user not found</td>
        @endif
        <td><img src="{{asset($v_blog->blog_image)}}" height="80px" width="80px"></td>
        @if($v_blog->publication_status ==1)
        <td><span class="label label-important label-mini">published</span></td>
        @else
        <td><span class="label label-important label-mini">unpublished</span></td>
        @endif
        <td>
            <a href="{{route('edit-blog',[$v_blog->id])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
            <a class="btn btn-danger" href="{{route('delete-blog',[$v_blog->id])}}"><i class="icon-trash "></i></a>
        </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
</div>
</div>
<!-- END BASIC PORTLET-->
</div>
</div>
@endsection