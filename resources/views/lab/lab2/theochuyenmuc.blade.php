<!DOCTYPE html>
<html>
<head>
	<title>Tin theo chuyên mục</title>
	<!-- Add Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-4">
		<h1 class="mb-4 text-center">Tin theo chuyên mục</h1>
		<div class="card">
			<div class="card-body">
				<ul class="list-group">
					@foreach($tinTheoCM as $tin)
						<li class="list-group-item">
							<a href="{{ url('/chi-tiet-tin/' . $tin->id) }}" class="text-decoration-none">
								{{ $tin->TieuDe }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<!-- Add Bootstrap JS and Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
