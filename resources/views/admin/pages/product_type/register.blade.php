@extends('admin.layouts.master')

@section('title')
    Thêm danh mục sản phẩm
@endsection

@section('content')
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Thêm danh mục sản phẩm</div>
            <div class="card-body">
                <form role="form" action="{{route('productType.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group col-md-12">
                        <div class="form-label-group">
                            <label>Danh mục:</label>
                            <select name="idCategory" class="form-control col-md-3">
                                @foreach($categoryList as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label for="firstName">Tên loại sản phẩm:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Tên loại sản phẩm"
                                           required="required" autofocus="autofocus">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-label-group">
                            <label>Trạng thái:</label>
                            <select name="status" class="form-control col-md-3">
                                <option value="1">Hiển thị</option>
                                <option value="0">Không hiển thị</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
@endsection
