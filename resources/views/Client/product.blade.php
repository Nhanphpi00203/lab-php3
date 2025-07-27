@extends('Client.layout.master')

@section('meta_title')
	Product
@endsection

@section('content')
<div class="container py-5">
	<!-- Hero Section -->
	<div class="bg-primary text-white text-center rounded-4 p-5 mb-5 shadow">
		<h1 class="fw-bold mb-3">Chào mừng đến với trang <span class="text-warning">Product</span></h1>
		<p class="fs-5">Khám phá những sản phẩm nổi bật và mới nhất của chúng tôi</p>
	</div>
	<!-- Product Categories Section -->
	<div class="text-center mb-4">
		<h2 class="fw-semibold">Danh mục Sản phẩm</h2>
		<p class="text-muted">Lựa chọn đa dạng - Giá cả hợp lý - Chất lượng đảm bảo</p>
	</div>

	<div class="row row-cols-1 row-cols-md-3 g-4">
		{{-- Dữ liệu giả (fake data) --}}
		@for ($i = 1; $i <= 6; $i++)
		<div class="col">
			<div class="card h-100 shadow-sm border-0">
				<img src="https://via.placeholder.com/300x200?text=Product+{{ $i }}" class="card-img-top" alt="Product {{ $i }}">
				<div class="card-body">
					<h5 class="card-title fw-bold">Sản phẩm {{ $i }}</h5>
					<p class="card-text text-muted">Mô tả ngắn gọn về sản phẩm {{ $i }}. Đây là dòng sản phẩm chất lượng cao, được khách hàng đánh giá tốt.</p>
				</div>
				<div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
					<span class="text-primary fw-bold">₫{{ number_format(99000 + $i * 10000) }}</span>
					<a href="#" class="btn btn-sm btn-outline-primary">
						<i class="bi bi-eye"></i> Xem chi tiết
					</a>
				</div>
			</div>
		</div>
		@endfor
	</div>
</div>
@endsection
