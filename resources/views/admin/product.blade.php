@extends('admin.layout.admin')

@section('meta_title', 'Product')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-primary"><i class="bi bi-box-seam"></i> Quản lý Sản phẩm</h1>
        <a href="#" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Thêm sản phẩm
        </a>
    </div>

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <p class="mb-0">Chào mừng đến với hệ thống quản trị sản phẩm. Tại đây bạn có thể xem, thêm, sửa hoặc xóa sản phẩm.</p>
        </div>
    </div>

    <!-- Danh sách sản phẩm (mô phỏng) -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light">
            <h5 class="mb-0">Danh sách sản phẩm</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th class="text-end">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Áo thun nam</td>
                        <td>250.000₫</td>
                        <td>Thời trang</td>
                        <td><span class="badge bg-success">Hiển thị</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <!-- Có thể lặp qua danh sách sản phẩm ở đây -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
