@extends('Client.layout.master')

@section('meta_title')
	Đăng nhập
@endsection

@section('content')
<div class="container mt-4">
	<div class="row justify-content-center align-items-center min-vh-100">
		<div class="col-md-5">
			<div class="card shadow">
				<div class="card-header text-center bg-primary text-white">
					<h4>Đăng nhập</h4>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" required autofocus>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="remember" name="remember">
							<label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
						</div>
						<button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
					</form>
				</div>
				<div class="card-footer text-center">
					<a href="{{ route('password.request') }}">Quên mật khẩu?</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
