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
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            padding-top: 1rem;
        }
        .sidebar a {
            color: #fff;
            padding: 12px 20px;
            display: block;
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-left: 4px solid #198754;
        }
        .sidebar a.active {
            background-color: #198754;
            border-left: 4px solid #fff;
        }
        main {
            padding: 24px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                width: 100%;
                height: auto;
                z-index: 1000;
            }
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminSidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="adminSidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky">
                    <nav class="nav flex-column">
                        <a href="{{ url('/admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a>
                        <a href="{{ url('/admin/category') }}" class="{{ request()->is('admin/category') ? 'active' : '' }}">Category</a>
                        <a href="{{ url('/admin/product') }}" class="{{ request()->is('admin/product') ? 'active' : '' }}">Product</a>
                        <a href="{{ url('/admin/order') }}" class="{{ request()->is('admin/order') ? 'active' : '' }}">Order</a>
                        <a href="{{ url('/admin/post') }}" class="{{ request()->is('admin/post') ? 'active' : '' }}">Post</a>
                        <a href="{{ url('/admin/card') }}" class="{{ request()->is('admin/card') ? 'active' : '' }}">Card</a>
                        <a href="{{ url('/admin/checkout') }}" class="{{ request()->is('admin/checkout') ? 'active' : '' }}">Checkout</a>
                    </nav>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
