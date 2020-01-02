@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->


		

			<!-- <div class="shopper-informations">
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
			</div> -->
			
			<div class="review-payment"><h2>Xem lại giỏ hàng</h2></div>
			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Mô tả</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/upload/product/'.$v_content->options->image)}}"width="50" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Mã SP: {{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>VNĐ {{$v_content->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-qty')}}" method="POST">{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" autocomplete="off" size="2">
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class ="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class ="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php
                                   $subtotal = $v_content->price * $v_content->qty;
                                   echo number_format($subtotal).'.'.'VNĐ';
								  ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
			<h4 style="margin:40px 0;font-size:20px">Chọn hình thức thanh toán</h4>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{csrf_field()}}
			<div class="payment-options">
				<span>
					<label><input type="checkbox" name="payment_option" value="1">Thanh toán qua ATM</label>
				</span>
				<span>
					<label><input type="checkbox" name="payment_option" value="2">COD</label>
				</span>
				<span>
					<label><input type="checkbox" name="payment_option" value="3">Thẻ tín dụng</label>
				</span>
				<input type="submit" background-color="green" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">

			</div>
				</form>
			</div>

	</section>
@endsection