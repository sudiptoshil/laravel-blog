<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>blog application</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset("frontend/css/bootstrap.css")}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset("frontend/css/font-awesome.min.css")}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("frontend/style.css")}}" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="{{asset("frontend/css/animate.css")}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset("frontend/css/responsive.css")}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset("frontend/css/colors.css")}}" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="{{asset("frontend/css/version/marketing.css")}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <!-- for header  -->
     @include("frontend.home.header.header")
     <!-- end header -->
     <!-- for slider -->
      @include("frontend.home.slider.slider_content")
      <!-- for end header -->

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @yield("home_content")
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach($blogs as $V_blogs)
                                        <a href="" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset($V_blogs->blog_image)}}" height="80px" width="80px" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$V_blogs->blog_title}}</h5>
                                                <small>{{$V_blogs->created_at}}</small>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title"> Categories</h2>
                                <div class="link-widget">
                                    @foreach($categories as $v_category)
                                    <ul>
                <li><a href="{{route("category-wise-blog",["id" => $v_category->id])}}"> {{$v_category->category_name}}</a></li>
                                    </ul>
                                     @endforeach
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

       <!-- footer part -->
       @include("frontend.home.footer.footer")
       <!-- footer part end -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{asset("frontend/js/jquery.min.js")}}"></script>
    <script src="{{asset("frontend/js/tether.min.js")}}"></script>
    <script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("frontend/js/animate.js")}}"></script>
    <script src="{{asset("frontend/js/custom.js")}}"></script>

</body>
</html>