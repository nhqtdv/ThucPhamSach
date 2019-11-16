@extends('admin_layout')
@section('admin_content')

<style type="text/css">
 .panel {
    border: none ! important;
}
</style>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật sản phẩm
                        </header>
                        <div class="panel-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                        ?>
                             <div class="position-center">
                                @foreach($edit_product as $key => $pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method = "post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input  type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá sản phẩm</label>
                                    <input  type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{$pro -> product_price}}"></input>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh sản phẩm</label>
                                    <input  type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Hình ảnh sản phẩm"></input>
                                    <img src="{{URL::to('public/upload/product/'.$pro -> product_image)}}" height="100" width="100">
                                    
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <input  type="text" name="product_desc" class="form-control" id="exampleInputEmail1" value="{{$pro -> product_desc}}"></input>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <input  type="text" name="product_content" class="form-control" id="exampleInputEmail1" value="{{$pro -> product_content}}"></input>
                                    
                                </div>
                             
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                     <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                        @if($cate->category_id == $pro->category_id)
                                        <option selected value ="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                        @else
                                        <option value ="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                        @endif
                                    @endforeach
                                 </select>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nhà cung cấp</label>
                                     <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand)
                                <option value ="{{$brand->brand_id}}" >{{$brand->brand_name}}</option>
                                @endforeach
                                 </select>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                     <select name="product_status" class="form-control input-sm m-bot15">
                                <option value ="0" >Ẩn</option>
                                <option value ="1">Hiển thị</option>
                               
                            </select>
                                </div>
                                
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection