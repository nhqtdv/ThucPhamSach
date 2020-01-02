@extends('layout')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				  <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                    header("Location: /ThucPhamSach/checkout");
                                    die();

                                 ?>   
                                    
                                
                                
                                <?php
                            }else{
                                ?>
                                 <div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Email" />
							<input type="password" name="password_account" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ?
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng kí!</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="customer_name" placeholder="Tên"/>
							<input type="email" name="customer_email" placeholder="Email"/>
							<input type="password" name="customer_password" placeholder="Password"/>
							<input type="text" name="customer_phone" placeholder="Số điện thoại"/>
							<button type="submit" class="btn btn-default">Đăng kí</button>
						</form>
					</div><!--/sign up form-->
				</div>
                                }
                                <?php
                            } ?>
				
			</div>
		</div>
	</section><!--/form-->
@endsection