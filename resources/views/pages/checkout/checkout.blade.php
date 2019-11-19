@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Bước 1</h2>
			</div>
			<!--/checkout-options-->

		

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout')}}" method="POST">
									
											{{csrf_field()}}
									<input type="text" name="orders_name" placeholder="Tên *">
									<input type="text" name="orders_email" placeholder="Email">
									<input type="text" name="orders_address" placeholder="Địa chỉ *">
									<input type="text" name="orders_phone" placeholder="Điện thoại">
									<textarea name="orders_note"  placeholder="Các yêu cầu về giao hàng, đóng gói" rows="5"></textarea>
									
				                <label>Phương thức thanh toán</label>			
					            <span>
						        <label><input type="checkbox"> Chuyển khoản trực tiếp</label>
					            </span>
					            <span>
						        <label><input type="checkbox"> COD</label>
					             </span>
					<input type="submit" background-color="green" value="Thanh toán" name="send_order" class="btn btn-primary btn-sm">
					</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			
	</section>
@endsection