@extends('admin.layout.admin')

@section('meta_title', 'Category')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary fw-bold">Quản lý Danh mục</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Trang chủ</li>
        <li class="breadcrumb-item">Category</li>
    </ol>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span><i class="fas fa-folder me-2"></i>Danh sách Danh mục</span>
            <a href="#" class="btn btn-light btn-sm"><i class="fas fa-plus-circle me-1"></i>Thêm danh mục</a>
        </div>
        <div class="card-body">
            <p class="text-muted">Chào mừng bạn đến với trang quản lý danh mục sản phẩm. Bạn có thể thêm, sửa hoặc xóa danh mục tại đây.</p>

            {{-- Dữ liệu danh mục ảo --}}
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thời trang</td>
                        <td><span class="badge bg-success">Hoạt động</span></td>
                        <td>2024-07-01</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ẩm thực</td>
                        <td><span class="badge bg-secondary">Ẩn</span></td>
                        <td>2024-06-21</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <!-- Có thể thêm nhiều dòng nữa -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
