
<!DOCTYPE HTML>
<html>
<head>
<title>dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="laptop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="source/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="source/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="source/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="source/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="source/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
<!-- lined-icons -->
<link rel="stylesheet" href="source/css/icon-font.min.css" type='text/css' />

<!-- tables -->
<link rel="stylesheet" type="text/css" href="source/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="source/css/basictable.css" />
<script type="text/javascript" src="source/js/jquery.basictable.min.js"></script>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
					
					
						 
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="source/images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Thông tin</p>
													<span>Admin</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Cài đặt</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Thông tin</a> </li> 
											<li> <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
		@yield('content')
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 N5QPT. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index-ad"><i class="fa fa-tachometer"></i> <span>Trang chủ</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="donhang-ad"><i class="fa fa-envelope nav_icon"></i><span>Đơn hàng</span><div class="clearfix"></div></a></li>
									<!-- <li><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li> -->
									
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Sản phẩm</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="sanpham-ad">Quản lý sản phẩm</a></li>
											<!-- <li id="menu-academico-avaliacoes" ><a href="sanpham1.html">Loại sản phẩm</a></li> -->
											<li id="menu-academico-avaliacoes" ><a href="nsx-ad">Nhà sản xuất</a></li></ul>
										</li>
								
										<li id="menu-academico" ><a href="report-ad"><i class="fa fa-file-text-o"></i><span>Report</span><div class="clearfix"></div></a></li>
								
									
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="source/js/jquery.nicescroll.js"></script>
 <script src="source/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="source/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="source/js/raphael-min.js"></script>

</body>
</html>