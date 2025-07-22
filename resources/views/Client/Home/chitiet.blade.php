@extends('Client.layout.master')
@section('meta_title')
	Chi tiết sản phẩm
@endsection
@section('content')
<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card shadow">
				<div class="card-body">
					<h1 class="card-title text-primary mb-4">{{ $product->title }}</h1>

					<div class="mb-4">
						<h5 class="text-muted">Mô tả sản phẩm:</h5>
						<p class="lead">{{ $product->description }}</p>
					</div>

					<div class="row mb-4">
						<div class="col-md-6">
							<div class="card bg-light">
								<div class="card-body">
									<h5 class="card-title">Giá bán</h5>
									<p class="card-text text-danger fw-bold">{{ number_format($product->price) }} VND</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card bg-light">
								<div class="card-body">
									<h5 class="card-title">Danh mục</h5>
									<p class="card-text">{{ $product->category_id }}</p>
								</div>
							</div>
						</div>
					</div>

					<div class="text-muted small mb-4">
						<p>Ngày đăng: {{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y H:i') }}</p>
						<p>Cập nhật lần cuối: {{ \Carbon\Carbon::parse($product->updated_at)->format('d/m/Y H:i') }}</p>
					</div>

					<a href="/tin-trong-loai/{{ $product->category_id }}" class="btn btn-primary">
						<i class="fas fa-list-ul"></i> Xem thêm sản phẩm cùng loại
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
