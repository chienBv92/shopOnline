@extends('admin.layouts.master')

@section('title')
    Danh sách loại sản phẩm
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($productType as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value-> idCategory}}</td>
                            <td>{{$value-> name}}</td>
                            <td>{{$value-> slug}}</td>
                            <td>
                                @if($value-> status == 1)
                                    {{"hiển thị"}}
                                    @else
                                    {{"Ẩn"}}
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-primary edit" data-id="{{$value->id}}" data-toggle="modal" data-target="#edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button class="btn btn-danger delete" data-id="{{$value->id}}" data-toggle="modal" data-target="#delete" type="button"><i class="fa fa-trash"
                                                                                                  aria-hidden="true"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{{ $productType->links() }}</div>
            </div>
        </div>
        <div class="card-header py-3">
            <a class="link-add col-md-3" href="{{route('productType.create')}}">thêm danh mục</a>
        </div>
    </div>

    <!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa category <span class="title"></span></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <form role="form">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <input type="hidden" name="id" id="id" value="">
                                <fieldset class="form-group">
                                    <label>Tên danh mục</label>
                                    <input class="form-control name" name="name" placeholder="Nhập tên category">
                                    <span class="error" style="color: red;font-size: 1rem;"></span>
                                </fieldset>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control status" name="status">
                                        <option value="1" class="ht">Hiển Thị</option>
                                        <option value="0" class="kht">Không Hiển Thị</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success update">Save</button>
                    <button type="reset" class="btn btn-primary">Làm Lại</button>
                    <button class="btn btn-secondary cancel" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success del">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .link-add:hover{
        background: #ccd5db;
    }
</style>

<script>

</script>
