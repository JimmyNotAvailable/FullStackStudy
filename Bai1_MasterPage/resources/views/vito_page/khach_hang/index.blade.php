<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@extends('vito_template.masterVitoTemplate')

@section('vito-content')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="card-header">
                    <h5 class="text-center"><b>Danh Sách Voucher</b></h5>
                </div>
                <div class="card-body text-start">
                    <label>Tên Mã Giảm Giá</label>
                    <select class="form-control mb-2">
                        <option value="1">Lorem ipsum dolor sit.</option>
                        <option value="2">Lorem ipsum dolor sit.</option>
                        <option value="3">Lorem ipsum dolor sit.</option>
                        <option value="4">Lorem ipsum dolor sit.</option>
                        <option value="5">Lorem ipsum dolor sit.</option>
                    </select>
                    <label>Slug Mã Giảm Giá</label>
                    <input class="form-control mb-2" type="text">
                    <label>Loại Mã Giảm Giá</label>
                    <select class="form-control mb-2">
                        <option value="1">Khuyến Mãi Đơn Hàng</option>
                        <option value="2">Giảm Giá Vận Chuyển</option>
                    </select>
                    <label>Tình Trạng</label>
                    <select class="form-control mb-2">
                        <option value="1">Sử Dụng</option>
                        <option value="2">Ẩn</option>
                    </select>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Sử Dụng Cho Đơn Hàng
                    </button>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 me-2">
                <div class="card-header card-hover">
                    <h5 class="text-center"><b>Giỏ Hàng</b></h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Sản Phẩm</th>
                                <th class="text-center">Hình Ảnh</th>
                                <th class="text-center">Tên Shop</th>
                                <th class="text-center">Mã Giảm Giá</th>
                                <th class="text-center">Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center align-middle">1</th>
                                <th class="text-center align-middle">Iphone 15 Pro Max</th>
                                <td class="text-center align-middle">
                                    <img style="img-fluid;"
                                        src="https://t4.ftcdn.net/jpg/02/84/28/13/360_F_284281327_OfQLmTf0R8d5ZEywNdVAizLvtMObvTpA.jpg"
                                        class="rounded-circle elevation-2" alt="hinh_anh_san_pham">
                                </td>
                                <th class="text-center align-middle">Be Su Studio</th>
                                <th class="text-center align-middle">
                                    be-su-studio12
                                </th>
                                <th class="text-center align-middle text-primary">21.930.000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Mua Sắm Tiếp
                    </button>
                    <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Thanh Toán
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
