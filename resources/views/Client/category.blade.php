@extends('Client.layout.master')

@section('meta_title')
    Danh Mục Tin Tức
@endsection

@section('content')
<div class="container py-5">

    <!-- Hero Section -->
    <section class="text-center bg-white p-5 rounded-4 shadow mb-5 border">
        <h1 class="display-5 fw-bold text-success">Khám phá các Danh Mục</h1>
        <p class="lead text-muted">Cập nhật tin tức mới nhất từ nhiều lĩnh vực khác nhau.</p>
    </section>

    <!-- Category List -->
    <section>
        <h2 class="text-center text-uppercase fw-semibold mb-4">Danh mục tin tức</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @forelse ($categories as $item)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition position-relative overflow-hidden">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold text-primary">{{ $item->name }}</h5>
                                <p class="card-text text-muted">Tổng hợp tin tức thuộc danh mục này.</p>
                            </div>
                            <div class="mt-3">
                                <a href="{{ url('/tin-trong-loai/' . $item->id) }}" class="btn btn-outline-success w-100">
                                    Xem Tin Tức
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Hiện chưa có danh mục nào để hiển thị.
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection
