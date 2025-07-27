@extends('admin.layout.admin')

@section('meta_title', 'Checkout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">
            <i class="bi bi-credit-card text-primary"></i> Quản lý Checkout
        </h2>
        <a href="#" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Thêm mới
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <p class="text-muted">Chào mừng đến với hệ thống quản trị đơn hàng thanh toán. Tại đây bạn có thể xem, sửa hoặc xóa thông tin checkout.</p>

            {{-- Ví dụ bảng checkout --}}
            <table class="table table-hover mt-3">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Người dùng</th>
                        <th>Đơn hàng</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Bạn có thể lặp qua danh sách checkout tại đây --}}
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>#12345</td>
                        <td><span class="badge bg-success">Hoàn tất</span></td>
                        <td>27/07/2025</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    {{-- Thêm các dòng khác tương tự --}}
                </tbody>
            </table>

            {{-- Phân trang nếu có --}}
            {{-- {{ $checkouts->links() }} --}}
        </div>
    </div>
</div>
@endsection
