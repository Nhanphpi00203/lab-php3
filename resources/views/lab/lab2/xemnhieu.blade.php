<!DOCTYPE html>
<html>
<head>
	<title>Tin xem nhiều</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.news-container {
			max-width: 800px;
			margin: 30px auto;
			padding: 20px;
		}
		.news-title {
			color: #2c3e50;
			margin-bottom: 30px;
			text-align: center;
			font-weight: bold;
		}
		.news-list {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 15px rgba(0,0,0,0.1);
			padding: 20px;
		}
		.news-item {
			padding: 10px 15px;
			border-bottom: 1px solid #eee;
			transition: background-color 0.3s;
		}
		.news-item:last-child {
			border-bottom: none;
		}
		.news-item:hover {
			background-color: #f8f9fa;
		}
	</style>
</head>
<body class="bg-light">
	<div class="news-container">
		<h1 class="news-title">Top 10 tin được xem nhiều nhất</h1>
		<div class="news-list">
			@foreach($tinXemNhieu as $TieuDe)
				<div class="news-item">
					{{ $TieuDe }}
				</div>
			@endforeach
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
