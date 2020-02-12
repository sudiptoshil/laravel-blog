@extends("admin.admin_master")
@section("admin-home")
 <div class="row-fluid">
<div class="span12">
<!-- BEGIN BASIC PORTLET-->
<div class="widget orange">
<div class="widget-title">
<h4><i class="icon-reorder"></i> manage category</h4>
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
        <th><i class="icon-bullhorn"></i> Category name</th>
        <th><i class=" icon-edit"></i> Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    	@foreach($categories as $v_category)
    <tr>
        <td class="hidden-phone">{{$v_category->category_name}}</td>
        @if($v_category->publication_status == 1)
        <td><span class="label label-important label-mini">published</span></td>
        @else
        <td><span class="label label-important label-mini">unpublished</span></td>
        @endif
        <td>
            <a  href="{{route('edit-category',['id'=>$v_category->id])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
            <a href="{{route('delete-category',['id'=>$v_category->id])}}" class="btn btn-danger"><i class="icon-trash "></i></a>
        </td>
    </tr>
    @endforeach
  
    </tr>
    </tbody>
</table>
</div>
</div>
<!-- END BASIC PORTLET-->
</div>
</div>
@endsection