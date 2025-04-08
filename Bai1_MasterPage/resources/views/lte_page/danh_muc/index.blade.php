<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


@extends('lte_template.masterAdminPage')
@section('noi_dung_rieng')
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-5 col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="mt-2 text-center"><b>Thêm Mới Danh Mục Sản Phẩm</b></h5>
                        </div>
                        <div class="card-body text-start">
                            <label>Tên Danh Mục</label>
                            <input class="form-control mb-2" type="text">
                            <label>Slug Danh Mục</label>
                            <input class="form-control mb-2" type="text">
                            <label>Hình Ảnh Danh Mục</label>
                            <input class="form-control mb-2" type="text">
                            <label>Tình Trạng</label>
                            <input class="form-control mb-2" type="text">
                            <select class="form-control mb-2">
                                <option value="1">Hiển Thị</option>
                                <option value="2">Tạm Ẩn</option>
                            </select>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Thêm Mới
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5 class="mt-2 text-center"><b>Danh Mục Sản Phẩm</b></h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">TT</th>
                                        <th class="text-center">Tên Danh Mục</th>
                                        <th class="text-center">Slug Danh Mục</th>
                                        <th class="text-center">Hình Ảnh</th>
                                        <th class="text-center">Tình Trạng</th>
                                        <th class="text-center">Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center align-middle">1</th>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text-center align-middle">
                                            <img style="width: 40px;"
                                                src="https://t4.ftcdn.net/jpg/02/84/28/13/360_F_284281327_OfQLmTf0R8d5ZEywNdVAizLvtMObvTpA.jpg"
                                                class="img-circle elevation-2" alt="hinh_anh_san_pham">
                                        </td>
                                        <td class="text-center align-middle">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Hiển Thị
                                            </button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cập Nhật
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Tạm Ẩn
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle">1</th>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text-center align-middle">
                                            <img style="width: 40px;"
                                                src="https://t4.ftcdn.net/jpg/02/84/28/13/360_F_284281327_OfQLmTf0R8d5ZEywNdVAizLvtMObvTpA.jpg"
                                                class="img-circle elevation-2" alt="hinh_anh_san_pham">
                                        </td>
                                        <td class="text-center align-middle">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Hiển Thị
                                            </button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cập Nhật
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Tạm Ẩn
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle">1</th>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text align-middle">Iphone</td>
                                        <td class="text-center align-middle">
                                            <img style="width: 40px;"
                                                src="https://t4.ftcdn.net/jpg/02/84/28/13/360_F_284281327_OfQLmTf0R8d5ZEywNdVAizLvtMObvTpA.jpg"
                                                class="img-circle elevation-2" alt="hinh_anh_san_pham">
                                        </td>
                                        <td class="text-center align-middle">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Hiển Thị
                                            </button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cập Nhật
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Tạm Ẩn
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
