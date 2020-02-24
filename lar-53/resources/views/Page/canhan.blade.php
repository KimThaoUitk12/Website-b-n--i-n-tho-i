@extends('master')
@section('content')
<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Thông tin</strong> cá nhân</span></h4>
				<form action="customer.html" method="post">
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Họ tên</label>

							<div class="controls">
								<input type="value"  class="output-xlarge" id="name" value="Đinh Hữu Phước">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Địa chỉ</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" id="address" value="TP Hồ Chí Minh" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Số điện thoại</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" id="numberphone" value="01234567489">
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit" onclick="" value="Thay đổi thông tin">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>
			<div class="span7">					
				<h4 class="title"><span class="text"><strong>Lịch sử</strong> mua hàng</span></h4>
				<form action="newcustomer.html" method="post" class="form-stacked">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><strong>Các sản phẩm đã mua</strong> </label>
						</div>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail.html"><img alt="" src="source/themes/images/cloth/laptop1.png"></a><br/>
								<a href="product_detail.html" class="title">ASUS VivoBook Swift SF315</a><br/>
								<a href="#" class="category">i5 8250U/4GB/1TB/Win10</a>
								<p class="price">16.990.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">
								<span class="sale_tag"></span>												
								<a href="product_detail.html"><img alt="" src="source/themes/images/cloth/laptop2.jpg"></a><br/>
								<a href="product_detail.html" class="title">ASUS Vivobook Max X441UA</a><br/>
								<a href="#" class="category">intel Core i3, RAM 4GB DDR4</a>
								<p class="price">9.790.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<span class="sale_tag"></span>
								<a href="product_detail.html"><img alt="" src="source/themes/images/cloth/anh4.png"></a><br/>
								<a href="product_detail.html" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
								<a href="#" class="category">i5 8250U/4GB/1TB/Win10</a>
								<p class="price">16.500.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail.html"><img alt="" src="source/themes/images/cloth/anh8.png"></a><br/>
								<a href="product_detail.html" class="title">ROG ZENPHYRUS(GX501)</a><br/>
								<a href="#" class="category">Intel Core i7-7700HQ/24GB RAM/1TB SSD PCie</a>
								<p class="price">16.500.000 đ</p>
							</div>
						</li>
					</fieldset>
					
				</form>					
			</div>				
		</div>
		<script type="text/javascript">
		$(function() {
		$(document).ready(function() {
			$('#checkout').click(function (e) {
				document.location.href = "checkout.html";
			})
		});
		
	</script>
@endsection