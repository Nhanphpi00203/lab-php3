<!doctype html>
<html lang="en">
	<head>
		<title>@yield('meta_title', 'Trang chủ')</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS v5.2.1 -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
			crossorigin="anonymous"
		/>
	</head>

	<body>
		<header>
			<nav
				class="navbar navbar-expand-sm navbar-light bg-light"
			>
				<div class="container">
					<a class="navbar-brand" href="#">Immortal</a>
					<button
						class="navbar-toggler d-lg-none"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapsibleNavId"
						aria-controls="collapsibleNavId"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav me-auto mt-2 mt-lg-0">
							<li class="nav-item">
								<a class="nav-link active" href="#" aria-current="page"
									>Home
									<span class="visually-hidden">(current)</span></a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Cửa hàng</a>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdownId"
									data-bs-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Dropdown</a
								>
								<div
									class="dropdown-menu"
									aria-labelledby="dropdownId"
								>
									<a class="dropdown-item" href="#"
										>Action 1</a
									>
									<a class="dropdown-item" href="#"
										>Action 2</a
									>
								</div>
							</li>
						</ul>
						<form class="d-flex my-2 my-lg-0 me-3">
							<input
								class="form-control me-sm-2"
								type="text"
								placeholder="Search"
							/>
							<button
								class="btn btn-outline-success my-2 my-sm-0"
								type="submit"
							>
								Search
							</button>
						</form>
						<div class="d-flex">
							<a href="#" class="btn btn-outline-primary me-2">Đăng nhập</a>
							<a href="#" class="btn btn-primary">Đăng ký</a>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<main>
			@yield('content')
		</main>

		<footer class="bg-dark text-light py-4 mt-5">
				<div class="container">
			<div class="row">
					<div class="col-md-4 mb-3">
				<h5>About Us</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec.</p>
					</div>
					<div class="col-md-4 mb-3">
				<h5>Quick Links</h5>
				<ul class="list-unstyled">
						<li><a href="#" class="text-light">Home</a></li>
						<li><a href="#" class="text-light">Products</a></li>
						<li><a href="#" class="text-light">Services</a></li>
						<li><a href="#" class="text-light">Contact</a></li>
				</ul>
					</div>
					<div class="col-md-4 mb-3">
				<h5>Contact Info</h5>
				<ul class="list-unstyled">
						<li>Email: info@example.com</li>
						<li>Phone: +1 234 567 890</li>
						<li>Address: 123 Street, City, Country</li>
				</ul>
					</div>
			</div>
			<hr class="bg-light">
			<div class="text-center">
					<p class="mb-0">&copy; 2024 Your Company. All rights reserved.</p>
			</div>
				</div>
		</footer>

		<!-- Bootstrap JavaScript Libraries -->
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"
		></script>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
			integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
			crossorigin="anonymous"
		></script>
	</body>
</html>

