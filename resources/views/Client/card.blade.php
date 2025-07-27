@extends('Client.layout.master')

@section('meta_title')
    Card
@endsection

@section('content')
<div class="container py-5">

    <!-- Hero Section -->
    <section class="text-center bg-success bg-opacity-10 p-5 rounded-4 shadow mb-5">
        <h1 class="display-5 fw-bold text-success">Khám phá Tin Tức Hấp Dẫn</h1>
        <p class="lead text-muted">Tổng hợp các danh mục tin nổi bật được cập nhật mỗi ngày.</p>
    </section>

    <!-- Category Cards Section -->
    <section>
        <h2 class="text-center mb-5 fw-semibold text-uppercase">Danh mục tin tức</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @for($i = 1; $i <= 6; $i++)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <img src="https://source.unsplash.com/random/600x400?sig={{ $i }}&news" class="card-img-top" alt="Hình ảnh danh mục">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold text-success">Danh mục {{ $i }}</h5>
                            <p class="card-text text-muted">Nội dung ngắn gọn về danh mục {{ $i }}. Đây là nơi tổng hợp những tin tức quan trọng nhất.</p>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success w-100">Xem Tin Tức</a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
</div>
@endsection
