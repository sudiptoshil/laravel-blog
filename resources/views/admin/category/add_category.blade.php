@extends("admin.admin_master")
@section("admin-home")
 <div class="row-fluid">
<div class="span12">
<!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
<div class="widget-title">
    <h4><i class="icon-reorder"></i> add category form</h4>
    <span class="tools">
    <a href="javascript:;" class="icon-chevron-down"></a>
    <a href="javascript:;" class="icon-remove"></a>
    </span>
</div>

 <h3 align="center" style="color: red">{{Session::get("message")}}</h3>

<div class="widget-body">
    <!-- BEGIN FORM-->
    <form action="{{route('save-category')}}" method="post" class="form-horizontal">
        @csrf
        
        <div class="control-group">
            <label class="control-label"> category name</label>
            <div class="controls">
                <input type="text" name="category_name" class="input-xlarge" />
               
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
                
            </div>
        </div>
     
        <div class="form-actions">
            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            <button type="reset" class="btn"><i class=" icon-remove"></i> Cancel</button>
        </div>
    </form>
    <!-- END FORM-->
</div>
</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
</div>
@endsection