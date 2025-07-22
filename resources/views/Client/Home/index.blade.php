@extends('Client.layout.master')

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
@endsection
