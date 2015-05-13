<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/font-awesome/css/font-awesome.min.css'); ?>"  media="all" rel="stylesheet">
<div class="masthead">
		<!-- <h3 class="text-muted"> Softsharing </h3> -->
	<div class="container" id="banner">
	  <div class="row" style="margin-right: -14px">
	          <div class="col-xs-2 null">
	              <img src="{{asset('imgs/weblogo.png')}}" class="img-responsive" alt="Cinque Terre">
	          </div>
	          <div class="col-xs-10  null">
	                <div id="carousel" class="carousel slide" data-ride="carousel" >
	                  <!-- Indicators -->
	                  <ol class="carousel-indicators">
	                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
	                    <li data-target="#carousel" data-slide-to="1"></li>
	                    <li data-target="#carousel" data-slide-to="2"></li>
	                  </ol>
	                 
	                  <!-- Wrapper for slides -->
	                  <div class="carousel-inner">
	                    <div class="item active">
	                      <img src="{{asset('imgs/banner0.jpg')}}" alt="Slide 1">
	                      <div class="carousel-caption">
	                         
	                      </div>
	                    </div>
	                    <div class="item">
	                      <img src="{{asset('imgs/banner1.jpg')}}" alt="Slide 2">
	                      <div class="carousel-caption">
	                          
	                      </div>
	                    </div>
	                    <div class="item">
	                      <img src="{{asset('imgs/banner2.jpg')}}" alt="Slide 3">
	                      <div class="carousel-caption">
	                          
	                      </div>
	                    </div>
	                  </div>
	                 
	                  <!-- Controls -->
	                  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	                    <span class="glyphicon glyphicon-chevron-left"></span>
	                  </a>
	                  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                  </a>
	                </div> <!-- Carousel -->


	          </div>
	    </div>  
  </div>
		<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" id="home" href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Trang chủ </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">			      

<!-- 			      	<li class="dropdown"> -->
<!--                 		<a href="{{ URL::to('home/window') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">Window <span class="caret"></span></a> -->
<!-- 	                	<ul class="dropdown-menu" role="menu"> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Bảo mật</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Diệt virut - Spyware</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Internet & Email</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Ứng dụng văn phòng</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Dữ liệu - File</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm doanh nghiệp</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm giáo dục </a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Audio & Video</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Công cụ lập trình</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Drivers</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Hỗ trợ Mobile</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm khác</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Hệ thống</a></li> -->
<!-- 		                  <li class="divider"></li> -->
<!-- 		                </ul> -->
<!-- 	              	</li> -->


<!-- 	              	 <li class="dropdown"> -->
<!-- 		                <a href="{{ URL::to('home/mac') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">Mac <span class="caret"></span></a> -->
<!-- 		                <ul class="dropdown-menu" role="menu"> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Bảo mật</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Diệt virut - Spyware</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Internet & Email</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Ứng dụng văn phòng</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Dữ liệu - File</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm doanh nghiệp</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm giáo dục </a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Audio & Video</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Công cụ lập trình</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Drivers</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Hỗ trợ Mobile</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Phần mềm khác</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Hệ thống</a></li> -->
<!-- 		                  <li class="divider"></li> -->
<!-- 		                </ul> -->
<!-- 		            </li> -->

<!-- 		            <li class="dropdown"> -->
<!-- 		                <a href="{{ URL::to('home/huong-dan') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">Mobile <span class="caret"></span></a> -->
<!-- 		                <ul class="dropdown-menu" role="menu"> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Window Phone</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Android</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> iOS</a></li> -->
<!-- 		                  <li><a href="#"><span class="glyphicon glyphicon-minus"></span> Symbian</a></li> -->
<!-- 		                  <li class="divider"></li> -->
<!-- 		                </ul> -->
<!-- 		            </li>           -->
		             
			        <li>
			        	<a href="{{ URL::to('post') }}"><i class="fa fa-pencil-square-o"></i> Bài đăng </a>
			        </li>	  
			         
			     </ul>			      
			      
			      <ul class="nav navbar-nav navbar-right">
                	@if(Auth::check())
                		<?php $user = Auth::user() ?>
	                	@if($user->admin==1)
	                		<li><a href="{{ URL::to('admin/home') }}"><i class="fa fa-user"></i><span> Quản lý</span></a></li>
	                	@endif
                    <li><a href="{{ URL::to('profile') }}"><i class="fa fa-user"></i><span> Hồ sơ</span></a></li>
                    <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i><span> Đăng xuất ({{Auth::user()->username}})</span></a></li>
                	@else
                	<li><a href="{{ URL::to('register') }}"><i class="fa fa-user-plus"></i><span> Đăng kí</span></a></li>
                    <li><a href="{{ URL::to('login') }}"><i class="fa fa-sign-in"></i><span> Đăng nhập</span></a></li>
                	@endif
			      </ul>		

			      <form class="navbar-form navbar-right" role="search" action="{{URL::to('search')}}" >
			        <div class="form-group">
			          <input type="text" name="query" class="form-control" placeholder="Tìm phần mềm">			          			          
			        </div>
			        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			       
			      </form>      	

			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>
		<div class="col-mp-12" id="line1"></div>
</div>

        @if (Session::has('flash_notice'))
	        <script>
	        	$.notify("{{ Session::get('flash_notice') }}","success");
	        </script>
   		 @endif

