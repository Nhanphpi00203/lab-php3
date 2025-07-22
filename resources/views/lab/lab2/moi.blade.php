<!DOCTYPE html>
<html>
<head>
	<title>Tin mới nhất</title>
	<!-- Add Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="mb-4 text-primary">Tin mới nhất</h1>
				<div class="card">
					<div class="card-body">
						<ul class="list-group list-group-flush">
							@foreach($tinMoi as $tieuDe)
								<li class="list-group-item">{{ $tieuDe }}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Add Bootstrap JS and Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
