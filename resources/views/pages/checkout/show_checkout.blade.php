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

		<div class=register-req>Hãy Đăng kí hoặc Đăng nhập để thanh toán dễ dàng hơn!</div>
			<!--/checkout-options-->

		

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									
											{{csrf_field()}}
									<input type="text" name="shipping_name" placeholder="Tên *">
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_address" placeholder="Địa chỉ *">
									<input type="text" name="shipping_phone" placeholder="Điện thoại">
									<textarea name="shipping_notes"  placeholder="Các yêu cầu về giao hàng, đóng gói" rows="5"></textarea>
									
				                
					<input type="submit" background-color="green" value="Thanh toán" name="send_order" class="btn btn-primary btn-sm">
					</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			
	</section>
@endsection