@extends('admin.layout.admin')

@section('meta_title', 'Card')

@section('content')
<div class="container py-4">
    <!-- Tiêu đề trang -->
    <div class="d-flex align-items-center mb-4">
        <i class="bi bi-credit-card-2-front-fill fs-3 text-primary me-2"></i>
        <h2 class="mb-0">Quản lý Thẻ (Card)</h2>
    </div>

    <!-- Nội dung chính -->
    <div class="row">
        <!-- Thẻ thống kê -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-wallet2 display-4 text-success mb-3"></i>
                    <h5 class="card-title">Tổng số thẻ</h5>
                    <p class="card-text fs-4 fw-bold">120</p>
                </div>
            </div>
        </div>

        <!-- Thẻ đang hoạt động -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-check-circle-fill display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Thẻ hoạt động</h5>
                    <p class="card-text fs-4 fw-bold">85</p>
                </div>
            </div>
        </div>

        <!-- Thẻ bị khóa -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-x-circle-fill display-4 text-danger mb-3"></i>
                    <h5 class="card-title">Thẻ bị khóa</h5>
                    <p class="card-text fs-4 fw-bold">35</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Nội dung bổ sung -->
    <div class="alert alert-info mt-4" role="alert">
        <i class="bi bi-info-circle-fill me-2"></i>
        Bạn có thể quản lý và kiểm tra trạng thái các thẻ được cấp cho người dùng tại đây.
    </div>
</div>
@endsection
