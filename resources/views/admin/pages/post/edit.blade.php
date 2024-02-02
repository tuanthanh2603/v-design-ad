@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">CHỈNH SỬA BÀI VIẾT: <b style="color:red">{{ $post->name }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.posts.update', ['id' => $post->id]) }}">
                            @csrf
                            <div class="col-md-12">
                                <label>Tên bài viết</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Chủ đề</label>
                                <div class="input-group mb-3">
                                    <select name="topic_id" class="form-control">
                                        @foreach ($topics as $topic)
                                            <option value="{{ $topic->id }}" {{ $post->topic_id == $topic->id ? 'selected' : '' }}>
                                                {{ $topic->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Ảnh bìa (2560x1235)</label>
                                <div class="input-group form-group">
                                    <input class="form-control" name="image" id="image" value="{{ $post->image }}" readonly style="height:41px;z-index:0" type="text">
                                    <div class="input-group-append">
                                        <label class="input-group-text btn btn-primary" for="image_file" id="uploadBtn">Chọn file</label>
                                        <input type="file" class="form-control-file d-none" id="image_file" name="image_file">
                                    </div>
                                </div>
                                <img id="previewImg" src="{{ $post->image }}" class="img-fluid" alt="" style="width:30%;">
                            </div>
                            <div class="col-md-12">
                                <label>Mô tả bài viết</label>
                                <div class="input-group mb-3">
                                    <textarea rows="5" name="description" class="form-control">{{ $post->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Nội dung bài viết</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'content' );
                                    </script>
                                    <style>
                                        #cke_content {
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary">Xác nhận</button>
                                <a href="{{ route('admin.posts.index') }}" class="btn bg-gradient-secondary">Quay lại danh sách</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#image_file').on('change', function() {
            let image = $('#image_file').prop('files')[0];
            let formData = new FormData();
            formData.append('image', image);

            $.ajax({
                url: "{{ route('image.upload') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if(data.path){
                        $('#image').val(data.path);
                        $('#previewImg').attr('src', data.path);
                        $('#previewImg').show();
                    }else{
                        $('#image').val('');
                        $('#previewImg').attr('src', '');
                        $('#previewImg').hide();
                    }

                }
            });
        });
    </script>
@endsection
