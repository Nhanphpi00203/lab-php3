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
            <h1 class="display-5 fw-bold">Chào mừng đến với FreshFood</h1>
            <p class="fs-4">Thực phẩm sạch – Chất lượng cao – Dành cho người trẻ</p>
        </div>
    </div>

    <!-- Sản phẩm nổi bật -->
    <h2 class="mb-4 text-primary">🔥 Sản phẩm nổi bật</h2>
    <div class="row mb-5">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    {{-- <img src="https://via.placeholder.com/600x300?text=SP+Nổi+Bật+{{ $i }}" class="card-img-top" alt="Sản phẩm nổi bật"> --}}
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm nổi bật {{ $i }}</h5>
                        <p class="card-text">Mô tả ngắn gọn về thực phẩm nổi bật {{ $i }} sẽ hiển thị ở đây.</p>
                        <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Sản phẩm mới -->
    <h2 class="mb-4 text-success">🆕 Sản phẩm mới</h2>
    <div class="row mb-5">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-success">
                    {{-- <img src="https://via.placeholder.com/600x300?text=SP+Mới+{{ $i }}" class="card-img-top" alt="Sản phẩm mới"> --}}
                    <div class="card-body">
                        <h6 class="card-title">Sản phẩm mới {{ $i }}</h6>
                        <a href="#" class="stretched-link text-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Sản phẩm được xem nhiều -->
    <h2 class="mb-4 text-danger">👀 Được quan tâm nhiều</h2>
    <div class="list-group">
        @for ($i = 1; $i <= 5; $i++)
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Thực phẩm chất lượng {{ $i }}
                <span class="badge bg-danger rounded-pill">{{ rand(100, 500) }} lượt xem</span>
            </a>
        @endfor
    </div>
</div>
@endsection

