@extends('Client.layout.master')

@section('meta_title')
    Order
@endsection

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="text-center py-5 bg-light rounded shadow-sm mb-5">
        <h1 class="display-5 fw-bold text-success">Chào mừng đến với trang Order</h1>
        <p class="lead text-secondary mt-3">Khám phá các đơn hàng và danh mục nổi bật nhất của bạn.</p>
    </div>

    <!-- Order Categories Section -->
    <h2 class="text-center text-primary mb-4">Danh mục Order</h2>

    <div class="row g-4 justify-content-center">
        {{-- Danh sách giả định các danh mục --}}
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-sm-6 col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-basket text-success" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title fw-bold text-dark">Danh mục #{{ $i }}</h5>
                        <p class="card-text text-muted">Chi tiết về danh mục đơn hàng số {{ $i }}</p>
                        <a href="#" class="btn btn-outline-success mt-2">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
