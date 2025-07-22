<div class="container mt-4">
	<div class="card">
		<div class="card-body">
			<h2 class="card-title mb-3">{{ $tin->TieuDe }}</h2>
			<p class="text-muted">
				<i class="far fa-calendar-alt"></i>
				<strong>Ngày đăng:</strong> {{ $tin->created_at->format('d/m/Y H:i') }}
			</p>
			<div class="card-text mt-3">
				{{ $tin->NoiDung }}
			</div>
		</div>
	</div>
</div>
