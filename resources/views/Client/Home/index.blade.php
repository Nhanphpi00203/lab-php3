{{-- @extends('Client.layout.master')

@section('meta_title')
	Trang chủ
@endsection

@section('content')
<div class="container mt-4">
	<!-- Hero Section -->
	<div class="jumbotron text-center bg-light p-5 rounded-3 mb-4">
		<h1 class="display-4">Chào mừng đến với trang tin tức</h1>
		<p class="lead">Khám phá các tin tức mới nhất từ nhiều lĩnh vực khác nhau</p>
	</div>

	<!-- Categories Section -->
	<div class="row">
		<div class="col-12">
			<h2 class="text-center mb-4">Danh mục tin tức</h2>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				@foreach ($categories as $item)
					<div class="col">
						<div class="card h-100 shadow-sm">
							<div class="card-body">
								<h5 class="card-title">{{ $item->name }}</h5>
								<p class="card-text text-muted">Khám phá tin tức trong danh mục này</p>
								<a href="/tin-trong-loai/{{ $item->id }}" class="btn btn-primary">
									Xem thêm
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection --}}

@extends('Client.layout.master')

@section('meta_title', 'Trang chủ')

@section('content')
<div class="container mt-4">
    <!-- Hero Section -->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Chào mừng đến với Trang Tin Tức</h1>
            <p class="fs-4">Cập nhật nhanh chóng - Chính xác - Đa lĩnh vực</p>
        </div>
    </div>

    <!-- Tin Nổi Bật -->
    <h2 class="mb-4 text-primary">🔥 Tin nổi bật</h2>
    <div class="row mb-5">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/600x300?text=Tin+Nổi+Bật+{{ $i }}" class="card-img-top" alt="Tin nổi bật">
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề tin nổi bật {{ $i }}</h5>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tin nổi bật {{ $i }} sẽ hiển thị ở đây.</p>
                        <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Tin Mới -->
    <h2 class="mb-4 text-success">🆕 Tin mới nhất</h2>
    <div class="row mb-5">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-success">
                    <img src="https://via.placeholder.com/600x300?text=Tin+Mới+{{ $i }}" class="card-img-top" alt="Tin mới">
                    <div class="card-body">
                        <h6 class="card-title">Tin mới {{ $i }}</h6>
                        <a href="#" class="stretched-link text-success">Đọc thêm</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Tin Xem Nhiều -->
    <h2 class="mb-4 text-danger">👀 Tin xem nhiều</h2>
    <div class="list-group">
        @for ($i = 1; $i <= 5; $i++)
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Tin xem nhiều {{ $i }}
                <span class="badge bg-danger rounded-pill">{{ rand(100, 500) }} lượt xem</span>
            </a>
        @endfor
    </div>
</div>
@endsection
