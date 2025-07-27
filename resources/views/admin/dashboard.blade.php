@extends('admin.layout.admin')

@section('meta_title', 'Dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="row g-4">
        <!-- Welcome Card -->
        <div class="col-12">
            <div class="card shadow border-0 bg-light">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3 text-primary">🎉 Chào mừng đến với trang Quản trị</h2>
                    <p class="card-text fs-5">Quản lý nội dung, người dùng, đơn hàng và nhiều tính năng khác từ bảng điều khiển trung tâm.</p>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="card-title text-primary">📰 Bài viết</h5>
                    <p class="card-text fs-4">150</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <h5 class="card-title text-success">📦 Sản phẩm</h5>
                    <p class="card-text fs-4">85</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <h5 class="card-title text-warning">🛒 Đơn hàng</h5>
                    <p class="card-text fs-4">320</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <h5 class="card-title text-danger">👤 Người dùng</h5>
                    <p class="card-text fs-4">1200</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
