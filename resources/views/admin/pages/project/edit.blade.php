@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">CHỈNH SỬA DỰ ÁN: <b style="color:red">{{ $project->name }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.projects.update', ['id' => $project->id]) }}">
                            @csrf
                            <div class="col-md-12">
                                <label>Tên dự án</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" value="{{ $project->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Danh mục</label>
                                <div class="input-group mb-3">
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $project->category->id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Ảnh bìa (2560x1235)</label>
                                <div class="input-group form-group">
                                    <input class="form-control" name="image" id="image" value="{{ $project->image }}" readonly style="height:41px;z-index:0" type="text">
                                    <div class="input-group-append">
                                        <label class="input-group-text btn btn-primary" for="image_file" id="uploadBtn">Chọn file</label>
                                        <input type="file" class="form-control-file d-none" id="image_file" name="image_file">
                                    </div>
                                </div>
                                <img id="previewImg" src="{{ $project->image }}" class="img-fluid" alt="" style="width:30%;">
                            </div>
                            <div class="col-md-12">
                                <label>Danh sách ảnh dự án</label>
                                <div class="row" id="image_albums">
                                    <div class="card mb-2" style="width: 10rem;" onclick="insertImage()">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <a rel="tooltip" style="display: block;">
                                                <i class="fas fa-plus-circle fa-4x text-primary" aria-hidden="true"></i>
                                            </a>
                                            <input type="file" class="form-control-file d-none" id="insert_image_file" name="insert_image_file">
                                        </div>
                                    </div>
                                    @foreach ($images as $image)
                                    <div class="card mb-2" style="width: 10rem;">
                                        <img src="{{ $image->url }}" class="card-img-top">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <a rel="tooltip" onclick="deleteImage(this)">
                                                <i class="fas fa-times-circle text-danger" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Mô tả dự án</label>
                                <div class="input-group mb-3">
                                    <textarea rows="5" name="description" class="form-control">{{ $project->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Địa chỉ dự án</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="address" value="{{ $project->address }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Hiển thị ở trang chủ</label>
                                <div class="input-group mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" {{ $project->is_featured ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="albums" id="albums">
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary">Xác nhận</button>
                                <a href="{{ route('admin.projects.index') }}" class="btn bg-gradient-secondary">Quay lại danh sách</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            updateAlbumsInput();
        });
        
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

        function insertImage() {
            var fileInput = document.getElementById('insert_image_file');
            fileInput.click();
        }

        function displayNewImage(path) {
            if (path) {
                var newDiv = document.createElement("div");
                    newDiv.className = "card mb-2";
                    newDiv.style.width = "10rem";
                    
                    newDiv.innerHTML = `
                        <img src="${path}" class="card-img-top">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <a rel="tooltip" onclick="deleteImage(this)">
                                <i class="fas fa-times-circle text-danger" aria-hidden="true"></i>
                            </a>
                        </div>
                    `;
                var parentDiv = document.getElementById("image_albums");
                parentDiv.insertBefore(newDiv, parentDiv.children[1]);
            }
        }

        function deleteImage(element) {
            var card = element.closest('.card');
            card.parentNode.removeChild(card);
            updateAlbumsInput();
        }

        function getAllImagePaths() {
            var imagePaths = [];
            var cardElements = document.querySelectorAll('#image_albums .card');

            // Bắt đầu từ vị trí 1 để bỏ qua phần tử đầu tiên
            for (var i = 1; i < cardElements.length; i++) {
                var imgElement = cardElements[i].querySelector('img');
                if (imgElement) {
                    var imageUrl = imgElement.src;
                    var urlObject = new URL(imageUrl);
                    var relativePath = urlObject.pathname;
                    imagePaths.push(relativePath);
                }
            }

            return imagePaths;
        }

        function updateAlbumsInput() {
            var imagePaths = getAllImagePaths();
            var albumsInput = document.getElementById('albums');

            if (albumsInput) {
                // Sử dụng join để kết hợp các phần tử của mảng thành chuỗi, phân cách bởi dấu ,
                var joinedPaths = imagePaths.join(', ');

                // Gán chuỗi đã join vào ô input
                albumsInput.value = joinedPaths;
            }
        }

        document.getElementById('insert_image_file').addEventListener('change', function() {
            var image = this.files[0];
            var formData = new FormData();
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
                        if (data.path) {
                            displayNewImage(data.path);
                        } else {
                            // Xử lý khi upload ảnh không thành công
                            // ...
                        }
                        updateAlbumsInput();
                    }
                });
            });
    </script>
@endsection
