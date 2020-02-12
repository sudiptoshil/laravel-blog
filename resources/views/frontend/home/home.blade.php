@extends("frontend.master")
@section("home_content")
@foreach($blogs as $v_blog)
<div class="page-wrapper">
<div class="blog-custom-build">
	

<div class="blog-box wow fadeIn">
<div class="post-media">
<a href="marketing-single.html" title="">
    <img src="{{$v_blog->blog_image}}" height="40%" width="40%" alt="" class="img-fluid">
    <div class="hovereffect">
        <span></span>
    </div>
    <!-- end hover -->
</a>
</div>
<!-- end media -->



<div class="blog-meta big-meta text-center">
<div class="post-sharing">
</div>
<h4><a href="" title="">{{$v_blog->blog_title}}</a></h4>
<p>{{$v_blog->blog_description}}</p>
@if($v_blog->category)
<small>{{$v_blog->category->category_name}}</small>
@endif
<small>{{$v_blog->created_at}}</small>
@if($v_blog->user)
<small>{{$v_blog->user->name}}</small>
@endif

</div><!-- end meta -->
</div><!-- end blog-box -->
<!-- --------------------------------------------- -->

<hr class="invis">

<div class="blog-box wow fadeIn">
<div class="post-media">
<a href="" title="">
    <img src="" alt="" class="img-fluid">
    <div class="hovereffect">
        <span></span>
    </div>
    <!-- end hover -->
</a>
</div>
<!-- end media -->
</div><!-- end blog-box -->


<!-- <hr class="invis"> -->
</div>
</div>
@endforeach
<!-- <hr class="invis"> -->

<div class="row">
<div class="col-md-12">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
    <a class="page-link" href="#">Next</a>
</li>
</ul>
</nav>
</div><!-- end col -->
</div><!-- end row -->
@endsection