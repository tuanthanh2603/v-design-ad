@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">DANH SÁCH DỊCH VỤ ({{ $services->total() }})</h6>
                        <h5>
                            <a data-bs-toggle="modal" data-bs-target="#createModal"
                               class="btn btn-link text-success text-gradient px-3 mb-0"><i class="fa fa-plus"></i> Thêm mới
                            </a>
                        </h5>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center text-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs">#</th>
                                        <th class="text-uppercase text-secondary text-xxs">Thao tác</th>
                                        <th class="text-uppercase text-secondary text-xxs">Tên dịch vụ</th>
                                        <th class="text-uppercase text-secondary text-xxs">Mã dịch vụ</th>
                                        <th class="text-uppercase text-secondary text-xxs">Hình ảnh</th>
                                        <th class="text-uppercase text-secondary text-xxs">Ngày tạo</th>
                                        <th class="text-uppercase text-secondary text-xxs">Ngày cập nhật</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $index => $service)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $index + 1 }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <a href="{{ route('admin.services.edit', ['id' => $service->id]) }}"
                                                        class="btn btn-link text-primary text-gradient px-3 mb-0">
                                                        <i class="fa fa-edit"></i> Chỉnh sửa
                                                    </a>
                                                    <a href="#" data-id="{{ $service->id }}" data-url="{{ route('admin.services.destroy') }}"
                                                        class="btn btn-delete btn-link text-danger text-gradient px-3 mb-0">
                                                        <i class="fa fa-trash"></i> Xoá
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->slug }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><img style="width:100px" src="{{ $service->image }}"></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->created_at }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->updated_at }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $services->links('admin.custom_pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Thêm dịch vụ mới</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.services.create') }}">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <label>Tên dịch vụ (*)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label>Hình ảnh (500x230)</label>
                                <div class="input-group form-group">
                                    <input class="form-control" name="image" id="image" readonly style="height:41px;z-index:0" type="text">
                                    <div class="input-group-append">
                                        <label class="input-group-text btn btn-primary" for="image_file" id="uploadBtn">Chọn file</label>
                                        <input type="file" class="form-control-file d-none" id="image_file" name="image_file">
                                    </div>
                                </div>
                                <img id="previewImg" class="img-fluid" alt="" style="display:none;width:30%;">
                            </div>

                            <div class="col-md-12">
                                <label>Mô tả (*)</label>
                                <div class="input-group mb-3">
                                    <textarea name="description" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary">Xác nhận</button>
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Thoát</button>
                        </div>
                    </form>
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
