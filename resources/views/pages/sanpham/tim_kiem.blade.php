 @extends('layout')
 @section('content')
<div class="col-sm-4">
                        <form action="{{URL::to('tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input type="submit" name="search_items"class="btn btn-default btn-sm" value="Tìm kiếm"/>
                        </div>
                    </div>
@endsection