@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Danh mục sản phẩm</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Thêm danh mục</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tên danh mục</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Trạng thái</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cập nhật</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Bảng hiệu</h6>

                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Hiện</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="javascript:;"><i class="far fa-trash-alt me-2"
                                                    aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Hộp Đèn - Đèn LED</h6>

                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning">Ẩn</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="javascript:;"><i class="far fa-trash-alt me-2"
                                                    aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Sản phẩm</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Thêm sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tên sản phẩm</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hình ảnh</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Trạng thái</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cập nhật</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Làm bảng hiệu</h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center ">
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Nick Daniel" data-bs-original-title="Nick Daniel">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Peterson" data-bs-original-title="Peterson">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Elena Morison" data-bs-original-title="Elena Morison">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Ryan Milly" data-bs-original-title="Ryan Milly">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Hiện</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="javascript:;"><i class="far fa-trash-alt me-2"
                                                    aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                    class="fas fa-pencil-alt text-dark me-2"
                                                    aria-hidden="true"></i>Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Làm Hộp Đèn - Đèn LED</h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center ">
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Nick Daniel" data-bs-original-title="Nick Daniel">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Peterson" data-bs-original-title="Peterson">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Elena Morison" data-bs-original-title="Elena Morison">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    aria-label="Ryan Milly" data-bs-original-title="Ryan Milly">
                                                    <img alt="Image placeholder" src="https://vdesign.vn/wp-content/uploads/2021/08/16.jpg">
                                                </a>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Ẩn</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="javascript:;"><i class="far fa-trash-alt me-2"
                                                    aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                    class="fas fa-pencil-alt text-dark me-2"
                                                    aria-hidden="true"></i>Edit</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
