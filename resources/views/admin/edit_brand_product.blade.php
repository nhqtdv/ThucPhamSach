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
                            Cập nhật nhà cung cấp sản phẩm
                        </header>
                        <div class="panel-body">
                            @foreach ($edit_brand_product as $key => $edit_value)
                             <div class="position-center">
                                <form role="form" action="{{URL::to('/update-brand/'.$edit_value->brand_id)}}" method = "post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input  type="text" value = "{{$edit_value -> brand_name}}" name="brand_product_name"  class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <input  type="text" value = "{{$edit_value -> brand_desc}}" name="brand_product_desc" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục"></input>
                                    
                                </div>
                                
                                <button type="submit" name="add_brand_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
@endsection