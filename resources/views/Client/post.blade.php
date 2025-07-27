@extends('Client.layout.master')

@section('meta_title')
	Post
@endsection

@section('content')
<div class="container mt-5">

	<!-- Hero Section -->
	<section class="text-center bg-white shadow rounded p-5 mb-5">
		<h1 class="display-5 fw-bold text-primary mb-3">📰 Tin Tức Mới Nhất</h1>
		<p class="lead text-muted">Khám phá những thông tin nóng hổi và hữu ích từ nhiều lĩnh vực!</p>
	</section>

	<!-- Categories/Post Section -->
	<section>
		<h2 class="text-center fw-semibold mb-4 text-dark">📂 Danh Mục Bài Viết</h2>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
			{{-- @foreach ($posts as $post) --}}
			@for ($i = 1; $i <= 6; $i++)
			<div class="col">
				<div class="card h-100 shadow-sm border-0">
					<img src="https://source.unsplash.com/random/400x250?sig={{ $i }}" class="card-img-top" alt="Hình ảnh bài viết">
					<div class="card-body">
						<h5 class="card-title">Tiêu đề bài viết {{ $i }}</h5>
						<p class="card-text text-muted small">Mô tả ngắn về bài viết để thu hút người đọc...</p>
					</div>
					<div class="card-footer bg-transparent border-0 text-end">
						<a href="#" class="btn btn-sm btn-outline-primary">Đọc tiếp</a>
					</div>
				</div>
			</div>
			@endfor
			{{-- @endforeach --}}
		</div>
	</section>
</div>
@endsection
