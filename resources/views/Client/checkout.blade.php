@extends('Client.layout.master')

@section('meta_title')
	checkout
@endsection

@section('content')
<div class="container mt-4">
	<!-- Hero Section -->
	<div class="jumbotron text-center bg-light p-5 rounded-3 mb-4">
		<h1 class="display-4">Chào mừng đến với trang checkout</h1>
		<p class="lead">Khám phá các tin tức mới nhất từ nhiều lĩnh vực khác nhau</p>
	</div>

	<!-- Categories Section -->
	<div class="row">
		<div class="col-12">
			<h2 class="text-center mb-4">Danh mục checkout</h2>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			</div>
		</div>
	</div>
</div>
@endsection
