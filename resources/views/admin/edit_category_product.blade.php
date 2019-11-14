@extends('admin_layout')
@section('admin_content')
<head>
<title>Trang quản trị</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{('public/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{('public/backend/js/raphael-min.js')}}"></script>
<script src="{{('public/backend/js/morris.js')}}"></script>


<style type="text/css">
 .panel {
    border: none ! important;
}
</style>
</head>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                    @foreach ($edit_category_product as $key => $edit_value)
                             <div class="position-center">
                                <form role="form" action="{{URL::to('/edit-category')}}" method = "post">
                                    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input  type="text" name="category_product_name" value = "{{$edit_value -> category_name}}"class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <input  type="text" name="category_product_desc" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục"></input>
                                    
                                </div>
                                
                                <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
@endsection