@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">CHỈNH SỬA DANH MỤC: <b style="color:red">{{ $category->name }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.categories.update', ['id' => $category->id]) }}">
                            @csrf
                            <div class="col-md-12">
                                <label>Tên danh mục</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary">Xác nhận</button>
                                <a href="{{ route('admin.categories.index') }}" class="btn bg-gradient-secondary">Quay lại danh sách</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
