@extends('Client.layout.master')

@section('meta_title')
	Trang tin trong loại
@endsection

@section('content')
<div class="container mt-4">
	<div class="row">
		@foreach ($products as $pro)
			<div class="col-md-4 mb-4">
				<div class="card h-100 shadow-sm">
					{{-- @if($pro->image)
						<img src="{{ asset($pro->image) }}" class="card-img-top" alt="{{ $pro->title }}" style="height: 200px; object-fit: cover;">
					@endif --}}
					<div class="card-body">
						<h5 class="card-title">{{ $pro->title }}</h5>
						@if(isset($pro->description))
							<p class="card-text text-muted">{{ Str::limit($pro->description, 100) }}</p>
						@endif
						<a href="/chi-tiet-san-pham/{{ $pro->id }}" class="btn btn-primary mt-2">
							Xem chi tiết
						</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection
