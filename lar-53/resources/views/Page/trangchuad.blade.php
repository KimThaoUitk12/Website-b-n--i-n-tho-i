@extends('masterAd')
@section('content')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-ad">Trang chủ</a> <i class="fa fa-angle-right"></i></li>
            </ol>

<!-- grids -->
				<div class="grids">
				
					
				
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
<!-- 									<p>Noi dung</p>
 -->								
 					<div class="agile-tables">
					<div class="w3l-table-info">
					  		<h2>Danh mục chức năng của admin:</h2>
						  <div class="row">
						  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						  		
						  	</div>
						  	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						  		<div class="list-group">
								    <a href="index-ad" class="list-group-item active">Trang chủ</a>
								    <a href="sanpham-ad" class="list-group-item">Quản lý sản phẩm</a>
								    <!-- <a href="sanpham1.html" class="list-group-item">Quản lý loại sản phẩm</a> -->
								    <a href="nsx-ad" class="list-group-item">Quản lý nhà sản xuất</a>
								    <a href="donhang-ad" class="list-group-item">Quản lý đơn hàng</a>
								  </div>
						  	</div>
						  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						  		
						  	</div>
						  </div>
					</div>
								</div>
								</div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
<!--photoday-section-->	
			
                        
                    	<div class="col-sm-4 wthree-crd">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                        
						<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
@endsection