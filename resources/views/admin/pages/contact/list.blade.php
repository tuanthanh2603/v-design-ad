@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="font-weight-bolder">DANH SÁCH LIÊN HỆ ({{ $contacts->total() }})</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center text-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs">#</th>
                                        <th class="text-uppercase text-secondary text-xxs">Thao tác</th>
                                        <th class="text-uppercase text-secondary text-xxs">Tên</th>
                                        <th class="text-uppercase text-secondary text-xxs">Số điện thoại</th>
                                        <th class="text-uppercase text-secondary text-xxs">Tin nhắn</th>
                                        <th class="text-uppercase text-secondary text-xxs">Trạng thái</th>
                                        <th class="text-uppercase text-secondary text-xxs">Ngày tạo</th>
                                        <th class="text-uppercase text-secondary text-xxs">Ngày cập nhật</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $index => $contact)
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
                                                    <button data-id="{{ $contact->id }}" data-status="{{ $contact->status == 0 ? 1 : 0 }}"
                                                            data-url="{{ route('admin.contacts.updateStatus', ['id' => $contact->id]) }}"
                                                            class="btn btn-link text-primary text-gradient px-3 mb-0 update-status-btn" data-status="{{ $contact->status }}">
                                                        <i class="fa {{ $contact->status == 0 ? 'fa-check' : 'fa-times' }}"></i>
                                                        <span class="status-text">{{ $contact->status == 0 ? 'Đã xử lý' : 'Chưa xử lý' }}</span>
                                                    </button>
                                                    <a href="#" data-id="{{ $contact->id }}" data-url="{{ route('admin.contacts.destroy') }}"
                                                        class="btn btn-delete btn-link text-danger text-gradient px-3 mb-0">
                                                        <i class="fa fa-trash"></i> Xoá
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $contact->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $contact->phone }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <textarea rows="3" class="form-control">{{ $contact->message }}</textarea>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            @php
                                                if($contact->status == 1){
                                                    echo '<span class="badge badge-sm bg-gradient-success">Đã xử lý</span>';
                                                }else{
                                                    echo '<span class="badge badge-sm bg-gradient-danger">Chưa xử lý</span>';
                                                }
                                            @endphp
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $contact->created_at }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $contact->updated_at }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $contacts->links('admin.custom_pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Thêm danh mục mới</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.contacts.create') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label>Tên danh mục</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control">
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
    </div> -->
<script>
    $(document).ready(function () {
        $('.update-status-btn').click(function (e) {
            e.preventDefault();
            var button = $(this);
            var contactId = button.data('id');
            var url = button.data('url');
            var statusText = button.data('status');
            $.ajax({
                url: url,
                type: 'PUT',
                data: { status: statusText },
                success: function (data) {
                    alert('Cập nhật trạng thái thành công');
                    location.reload();
                },
                error: function () {
                    alert('Có lỗi xảy ra khi cập nhật trạng thái');
                }
            });
        });
    });
</script>

@endsection
