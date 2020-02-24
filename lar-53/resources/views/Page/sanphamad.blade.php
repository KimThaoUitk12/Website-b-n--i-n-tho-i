@extends('masterAd')
@section('content')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="trangchuad">Trang chủ</a><i class="fa fa-angle-right"></i>Sản phẩm</li>
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
					  <h2>Thêm sản phẩm</h2>
					  <div class="row">
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					  		
					<form method="post" action="{{('sanpham')}}">
						
					@csrf			
						
							
							<table >
							<tr>
							<div class="form-group">
							<td>
							  <label for="gia">Tên sản phẩm:</label>
							  <input type="text" class="form-control" name="ten" id="ten"></td>
							 <td> <label for="gia">Hãng:</label>
							  <input type="text" class="form-control" name="hang"id="hang"></td>
												     
						    </div>
							</tr>
							<tr><td  colspan="2"> <label for="comment">Mô tả:</label>
						      <textarea class="form-control" rows="3" name="mota"id="mota"></textarea></td>	</tr>
								<!--  -->
							<tr>
							<div class="form-group">
							<td> <label for="gia">Giá:</label>
							  <input type="text" class="form-control" name="gia"id="gia"></td> 
						    <td><label for="gia">Giá khuyến mãi:</label>
							  <input type="text" class="form-control" name="giakm"id="giakm"></td>							  
							</div>
							</tr>
							<!--  -->
								<tr>
							<div class="form-group">
							 <td> <label for="nsx">Camera tước:</label>
							  <input type="text" class="form-control" name="truoc"id="truoc"></td>
							  <td> <label for="nsx">Camera sau:</label>
							  <input type="text" class="form-control" name="sau"id="sau"></td>
							</div>
							</tr>
								<tr>
							
							<tr>
							<div class="form-group">
						   <td>	
							  <label for="xuatxu">Màn hình:</label>
							  <input type="textarea" class="form-control" name="manhinh"id="manhinh">
							</div></td>
							<td>	
							  <label for="loai">Ram:</label>
							  <input type="textarea" class="form-control"name="ram" id="ram">
							</div></td>
							</tr>
							</table>					

							<button type="submit" class="btn btn-default">Thêm sản phẩm</button>
					</form>
					  	</div>
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  </div>
					  <h2>Cập nhật sản phẩm</h2>
					  <p>Có tổng số {{count($sanpham)}} sản phẩm</p>
					    <table id="table">
						<thead >
						  <tr >
						  <th>STT</th>
							<th>Mã sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Hãng</th>
							<th >Mô tả</th>
							<th >Ảnh</th>
							<th>Giá</th>
							<th>Giá khuyến mãi</th>
							<th>Ram</th>
							<th>Màn hình</th>
							<th>Camera trước</th>
							<th>Camera sau</th>
							<th>Chỉnh sửa</th>
						  </tr>
						</thead>
						<tbody>
							<?php $stt=0?>
				@foreach($sanpham as $sp)			
						   <tr class="info">
					<?php $stt++ ?>
						   <td>{{$stt}}</td>
							<td>{{$sp->MASP}}</td>
							<td>{{$sp->TENSP}}</td>
							<td>{{$sp->HANG}}</td>
							<td>{{$sp->MOTA}}</td>
							<td>{{$sp->ANHDAIDIEN}}</td>
							<td>{{$sp->GIA}}</td>
							<td>{{$sp->GIAKHUYENMAI}}</td>
							<td>{{$sp->RAM}}</td>
							
							<td>{{$sp->MANHINH}}</td>
							<td>{{$sp->CAMERATRUOC}}</td>
							<td>{{$sp->CAMERASAU}}</td>
							<td style="text-align: center;">
							<span >
									<button type="button" class="btn btn-primary"
									data-masp="{{$sp->MASP}}"
									data-hang="{{$sp->HANG}}"
									data-tensp="{{$sp->TENSP}}"
									data-mota="{{$sp->MOTA}}"
									data-anh="{{$sp->ANHDAIDIEN}}"
									data-gia="{{$sp->GIA}}"
									data-giakhuyenmai="{{$sp->GIAKHUYENMAI}}"
									data-ram="{{$sp->RAM}}"
									data-manhinh="{{$sp->MANHINH}}"
									data-cameratruoc="{{$sp->CAMERATRUOC}}"
									data-camerasau="{{$sp->CAMERASAU}}"
									 data-toggle="modal" data-target="#myModal">Edit</button>			
								{{-- <a class="agile-icon" href="{{URL::route('xoasp',$sp['MASP'])}}" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></a> --}}
							</span> 
							<span>
								 <a class="agile-icon" href="{{URL::route('xoasp',$sp['MASP'])}}" data-toggle="modal" data-target="#myModal1"><i class="fa fa-times-circle"></i></a> 
							</span>
							</td>
				@endforeach
						
						  
						</tbody>
	
					  </table>

					</div>
				
						
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cập nhật thông tin sản phẩm</h4>
        </div>
        <div class="modal-body">
		  <p>Mời bạn nhập thông tin sản phẩm: </p>
		  
		  <form action="{{ route('updatesp',($sp->MASP)) }}" method="POST">
									
				@csrf	
			<table >

							<tr>
							<div class="form-group">
							<input type="hidden" class="form-control" name="masp" id="masp" >
							<td>											
							  <label for="gia">Tên sản phẩm:</label>
							  <input type="text" class="form-control" name="tensp" id="tensp" ></td>
						
							 <td> <label for="gia">Hãng:</label>
							  <input type="text" class="form-control" name="hang"id="hang"></td>
												     
						    </div>
							</tr>
							<tr><td  colspan="2"> <label for="comment">Mô tả:</label>
						      <textarea class="form-control" rows="3" name="mota"id="mota"></textarea></td>	</tr>
								<!--  -->
							<tr>
							<div class="form-group">
							<td> <label for="">Giá:</label>
							  <input type="text" class="form-control" name="gia"id="gia"></td> 
						    <td><label for="">Giá khuyến mãi:</label>
							  <input type="text" class="form-control" name="giakhuyenmai"id="giakhuyenmai"></td>							  
							</div>
							</tr>
							<!--  -->
								<tr>
							<div class="form-group">
							 <td> <label for="">Camera trước:</label>
							  <input type="text" class="form-control" name="cameratruoc"id="cameratruoc"></td>
							  <td> <label for="">Camera sau:</label>
							  <input type="text" class="form-control" name="camerasau"id="camerasau"></td>
							</div>
							</tr>
								<tr>
								<!--  -->
							<tr>
							<div class="form-group">
						   <td>	
							  <label for="">Màn hình:</label>
							  <input type="text" class="form-control" name="manhinh"id="manhinh">
							</div></td>
							<td>	
							  <label for="">RAM:</label>
							  <input type="text" class="form-control"name="ram"id="ram">
							</div></td>
							</tr>
							</table>	
			<button type="submit" class="btn btn-default">Cập nhật</button>
			</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- end mymodal -->
  <!-- sanpham -->
    <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bạn có chắc chắn muốn xóa hay không?</h4>
        </div>
        <div class="modal-body">
          
			<form action="">
				<button type="submit" class="btn btn-default" style="margin-left: 43%;">Xóa
				</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end modal sanpham -->
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
	{{-- edit san pham --}}
	<script> 
			$('#myModal').on('show.bs.modal', function (event) {
			   var button = $(event.relatedTarget) 
				 var masp = button.data('masp') 
				 var tensp = button.data('tensp') 
				 var hang = button.data('hang') 
				 var mota = button.data('mota') 
				 var gia = button.data('gia') 
				 var giakhuyenmai = button.data('giakhuyenmai') 
				 var cameratruoc = button.data('cameratruoc') 
				 var camerasau = button.data('camerasau') 
				 var manhinh = button.data('manhinh') 
				 var ram = button.data('ram') 
				
			 
				 var modal = $(this)
				 modal.find('.modal-body #masp').val(masp);
				 modal.find('.modal-body #tensp').val(tensp);
				 modal.find('.modal-body #hang').val(hang);
				 modal.find('.modal-body #mota').val(mota);
				 modal.find('.modal-body #gia').val(gia);
				 modal.find('.modal-body #giakm').val(giakhuyenmai);
				 modal.find('.modal-body #cameratruoc').val(cameratruoc);
				 modal.find('.modal-body #camerasau').val(camerasau);
				 modal.find('.modal-body #manhinh').val(manhinh);
				 modal.find('.modal-body #ram').val(ram);			
			 
			 })</script>

	{{--  --}}
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