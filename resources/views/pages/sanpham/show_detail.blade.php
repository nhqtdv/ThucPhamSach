@extends('layout')
@section('content')
@foreach($product_detail as $key =>$value)
	<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/upload/product/'.$value->product_image)}}" alt="" />
								<h3>Phóng to</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{URL::to('public/frontend/images/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<p>Mã sản phẩm: {{$value->product_id}}</p>
								<img src="{{URL::to('public/frontend/images/rating.png')}}" alt="" />
								<span>
								<form action="{{URL::to('/save-cart')}} " method="POST">
										{{csrf_field()}}
									
									<span>VNĐ {{$value->product_price}}</span>
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1" value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ
									</button>
								</span>
								</form>
								<p><b>Tình trạng:</b> Còn hàng</p>
								
								<p><b>Nhà cung cấp:</b> {{$value->brand_name}}</p>

								<a href=""><img src="{{URL::to('public/frontend/images/share.png')}}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Chi tiết</a></li>
							
								
								<li ><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{!!$value->product_content!!}</p>
							
								
							</div>
							<!-- <div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="{{URL::to('public/frontend/images/rating.png')}}" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div> -->
							
						</div>
					</div>
					@endforeach
<div class="recommended_items">
						<h2 class="title text-center">Sản phẩm tương tự</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach($relate as $key => $lienquan)	
								
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$lienquan ->product_image)}}" alt="" />
                                            <h2>{{($lienquan->product_price).' VNĐ'}}</h2>
                                            <p>{{($lienquan->product_name)}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                           
                                        </div>
                                        
                                </div>
										</div>
									</div>
								@endforeach	
								</div>
								
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
</div>
@endsection