@extends('admin.layouts.master')

@section('title')
    Danh sách category
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($category as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
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
                                <button class="btn btn-primary edit" data-id="{{$value->id}}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button class="btn btn-danger delete" data-id="{{$value->id}}"><i class="fa fa-trash"
                                                                                                  aria-hidden="true"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-block" href="{{route('category.create')}}">Đăng ký mới</button>
        </div>
    </div>
@endsection
