@extends('admin.layout.admin')

@section('meta_title', 'Đơn hàng')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Quản lý Đơn hàng</h1>
        <a href="#" class="btn btn-success"><i class="bi bi-plus-circle"></i> Thêm đơn hàng</a>
    </div>

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h5 class="card-title">Tổng quan</h5>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="bg-light p-3 rounded">
                        <h6 class="text-muted">Tổng đơn hàng</h6>
                        <h4 class="text-primary">125</h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="bg-light p-3 rounded">
                        <h6 class="text-muted">Đang xử lý</h6>
                        <h4 class="text-warning">24</h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="bg-light p-3 rounded">
                        <h6 class="text-muted">Đã giao</h6>
                        <h4 class="text-success">91</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="card-title">Danh sách đơn hàng</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Khách hàng</th>
                            <th>Ngày đặt</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu giả lập -->
                        <tr>
                            <td>1</td>
                            <td>Nguyễn Văn A</td>
                            <td>2025-07-25</td>
                            <td><span class="badge bg-warning">Đang xử lý</span></td>
                            <td>1.200.000₫</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info"><i class="bi bi-eye"></i> Xem</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Trần Thị B</td>
                            <td>2025-07-20</td>
                            <td><span class="badge bg-success">Hoàn tất</span></td>
                            <td>850.000₫</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info"><i class="bi bi-eye"></i> Xem</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <!-- Kết thúc dữ liệu giả lập -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
