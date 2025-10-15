<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            background-color: #111827;
            color: #fff;
            width: 240px;
            min-height: 100vh;
        }

        .sidebar h4 {
            font-weight: 600;
            padding-left: 1rem;
            margin-bottom: 2rem;
        }

        .sidebar a {
            color: #d1d5db;
            text-decoration: none;
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.bg-secondary {
            background-color: #1f2937;
            color: #fff;
        }

        .main-content {
            padding: 1.5rem;
            flex: 1;
        }

        .table th, .table td {
            vertical-align: middle !important;
        }

        @media (max-width: 992px) {
            .sidebar-desktop {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .sidebar-toggle {
                display: none;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="d-flex">
    <div class="sidebar sidebar-desktop d-none d-lg-block">
        <h4>ENCORE Custom</h4>
        <a href="#">Dashboard</a>
        <a href="#">Orders</a>
        <a href="#" class="bg-secondary">Inventory</a>
        <a href="#">Payments</a>
        <a href="#">Customers</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>

    <div class="main-content w-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="btn btn-outline-secondary sidebar-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                <i class="bi bi-list"></i>
            </button>

            <h3 class="fw-bold mb-0">@yield('title')</h3>

            <div class="d-flex align-items-center gap-3">
                <div class="position-relative">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">12</span>
                    <i class="bi bi-bell fs-4"></i>
                </div>
                <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-secondary" style="width:36px;height:36px;"></div>
                    <span class="ms-2 text-muted">User Name</span>
                </div>
            </div>
        </div>

        @yield('content')
    </div>
</div>

<div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">ENCORE Custom</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <a href="#">Dashboard</a>
        <a href="#">Orders</a>
        <a href="#" class="bg-secondary">Inventory</a>
        <a href="#">Payments</a>
        <a href="#">Customers</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>
</div>

</body>
</html>
