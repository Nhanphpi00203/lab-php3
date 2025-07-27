<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('meta_title', 'Trang quản trị')</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: #ffffff;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #198754;
            color: #fff;
        }
        main {
            padding: 24px;
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Layout -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 sidebar d-none d-md-block">
                <nav class="nav flex-column mt-4">
                    <a href="{{ url('/admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ url('/admin/category') }}" class="{{ request()->is('admin/category') ? 'active' : '' }}">Category</a>
                    <a href="{{ url('/admin/product') }}" class="{{ request()->is('admin/product') ? 'active' : '' }}">Product</a>
                    <a href="{{ url('/admin/order') }}" class="{{ request()->is('admin/order') ? 'active' : '' }}">Order</a>
                    <a href="{{ url('/admin/post') }}" class="{{ request()->is('admin/post') ? 'active' : '' }}">Post</a>
                    <a href="{{ url('/admin/card') }}" class="{{ request()->is('admin/card') ? 'active' : '' }}">Card</a>
                    <a href="{{ url('/admin/checkout') }}" class="{{ request()->is('admin/checkout') ? 'active' : '' }}">Checkout</a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
