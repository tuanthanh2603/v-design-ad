@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">CHỈNH SỬA CHỦ ĐỀ: <b style="color:red">{{ $topic->name }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.topics.update', ['id' => $topic->id]) }}">
                            @csrf
                            <div class="col-md-12">
                                <label>Tên chủ đề</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" value="{{ $topic->name }}" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary">Xác nhận</button>
                                <a href="{{ route('admin.topics.index') }}" class="btn bg-gradient-secondary">Quay lại danh sách</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
