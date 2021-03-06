@extends('master')
@section('content')
<h4><span>Thanh Toán</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<!-- <div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Chỉnh sửa thông tin thanh toán</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4> Khách Hàng Mới </h4>

												<p>Bằng việc tạo một tài khoản bạn sẽ có thế mua sắm nhanh hơn, cập nhật tình trạng đơn hàng và theo dõi những đơn hàng mà bạn đã đặt trước đó.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Đăng ký tài khoản
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Thanh toán dạng khách
														</label>
														<br>
														<button class="btn btn-primary" data-toggle="collapse" data-parent="#collapse2">Tiếp tục</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Khách Hàng Đã Có Tài Khoản</h4>
												<p>Tôi là một khách hàng đã đăng ký tài khoản</p>
												<form action="#" method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Tên đăng nhập</label>
															<div class="controls">
																<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Mật khẩu</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button class="btn btn-primary">Tiếp tục</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<form method="POST" action="{{route('dathang')}}">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Tài khoản &amp; Chi tiết hóa đơn</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Thông tin cá nhân</h4>
												<div class="control-group">
													<label class="control-label">Họ và tên</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="ten">
													</div>
												</div>
												<!-- <div class="control-group">
													<label class="control-label">Họ và tên lót</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>	 -->				  
												<div class="control-group">
													<label class="control-label">Địa chỉ Email</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="email">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Điện thoại</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="sdt">
													</div>
												</div>
											</div>
											<div class="span6">
												<h4>Địa chỉ của bạn</h4>
												<div class="control-group">
													<label class="control-label">Địa chỉ</label>
													<div class="controls">
														<input type="text" placeholder="Địa chỉ chi tiết" class="input-xlarge" name="diachi">
													</div>
												</div>
												<!-- <div class="control-group">
													<label class="control-label">Công ty</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"> ID công ty:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Địa chỉ 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Địa chỉ 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Thành phố:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Mã bưu điện:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Quốc gia:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">Afghanistan</option>
															<option value="2">Albania</option>
															<option value="3">Algeria</option>
															<option value="4">American Samoa</option>
															<option value="5">Andorra</option>
															<option value="6">Angola</option>
															<option value="7">VietNam</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Ban / Quận:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Aberdeen</option>
															<option value="3514">Aberdeenshire</option>
															<option value="3515">Anglesey</option>
															<option value="3516">Angus</option>
															<option value="3517">Argyll and Bute</option>
															<option value="3518">Q1</option>
															<option value="3519">Q2</option>
															<option value="3520">Q3</option>
															<option value="3521">Q4</option>
															<option value="3522">Q5</option>
															<option value="3523">Q6</option>
															<option value="3524">Q7</option>
														</select>
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Xác nhận đơn hàng</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea name="note" rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>
											<input type="submit" name="" class="btn btn-primary pull-right" value="Xác nhận đơn hàng">							
											<!-- <button  class="btn btn-primary pull-right">Xác nhận đơn hàng</button> -->
										</div>
									</div>
								</div>
							</div>
						</form>
						</div>				
					</div>
				</div>
			</section>
			@endsection