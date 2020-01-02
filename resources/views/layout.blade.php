<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thực phẩm sạch</title>
    <link href="{{URL::asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('public/frontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('public/frontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('public/frontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0376498383</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> nhqtdv@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/')}}"><img src="{{URL::to('public/frontend/images/logo.png')}}" alt="" width="260" height="170"/></a>
                        </div>
                        
                    </div>
                    <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php 
                                   $customer_id=Session::get('customer_id');

                                   $shipping_id=Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id=NULL){
                                ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php }elseif($customer_id!=NULL && $shipping_id!=NULL){ ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php }else{

                                    ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Thanh toán</a></li> 
                                <?php } ?>

                               
                                
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){

                                 ?>   
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                
                                
                                <?php
                            }else{
                                ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li> 
                                }
                                <?php
                            } ?>

                            </ul>
                        </div>
                 
                </div>

            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                   
                                    <ul role="menu" class="sub-menu">
                                         @foreach($category as $key =>$cate)
                                        <li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>  
                                          @endforeach  
                                    </ul>
                                  
                                </li> 
                                <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>

                    </div>
                   <!--  <div class="col-sm-4">
                       <form action="{{URL::to('tim-kiem')}}" method="POST">
                           {{csrf_field()}}
                       <div class="search_box pull-right">
                           <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                           <input type="submit" name="search_items"class="btn btn-default btn-sm" value="Tìm kiếm"/>
                       </div>
                   </div> -->
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            
                            <div class="item active">
                               
                              <div class="col-sm-16">
                                    <img src="{{URL::to('public/frontend/images/2.png')}}" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            
                            <div class="item">
                                
                                <div class="col-sm-16">
                                    <img src="{{URL::to('public/frontend/images/3.png')}}" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">@foreach($category as $key =>$cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Nhà cung cấp</h2>
                            @foreach($brand as $key =>$brand)
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{URL::to('/nha-cung-cap/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                    
                                </ul>
                            </div>
                            @endforeach
                        </div><!--/brands_products-->
                        
                      
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{URL::asset('public/frontend/images/free.png')}}" width="200" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    
                    
                    
                    
                    @yield('content')
                    
                </div>
            </div>
        </div>
          <div class="quote"></div>
    </section>
  
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Thực phẩm sạch</span></h2>
                            <p>Có trang trại rau nhiệt đới đầu tiên tại Việt Nam đạt chứng nhận hữu cơ của Bộ Nông nghiệp Mỹ (USDA) & EU Organic Farming (Liên minh châu Âu)</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::asset('public/frontend/images/a1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Những loại thực phẩm giúp bạn chống chọi với những ngày ô nhiễm không khí</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                         <img src="{{URL::asset('public/frontend/images/a2.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>22 THỰC PHẨM GIÀU CHẤT XƠ BẠN NÊN ĂN NHIỀU HƠN MỖI NGÀY?</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                       <img src="{{URL::asset('public/frontend/images/a3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Trong sữa thường có đầy kháng sinh, hormon tăng trưởng và thuốc trừ sâu, còn sữa hữu cơ thì không</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                       <img src="{{URL::asset('public/frontend/images/a4.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>PHIÊN CHỢ RAU CỦ QUẢ HỮU CƠ CUỐI TUẦN</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{URL::asset('public/frontend/images/map.png')}}" alt="" />
                            <p>Thành phố Vinh - Tỉnh Nghệ An</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{URL::to('public/frontend/js/jquery.js')}}"></script>
    <script src="{{URL::to('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{URL::to('public/frontend/js/price-range.js')}}"></script>
    <script src="{{URL::to('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::to('public/frontend/js/main.js')}}"></script>
</body>
</html>