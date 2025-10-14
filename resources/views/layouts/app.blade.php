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
            min-height: 100vh;
            width: 240px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 1rem;
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

        .sidebar a:hover {
            background-color: #1f2937;
            color: #fff;
        }

        .main-content {
            margin-left: 240px;
            padding: 1.5rem;
        }

        .table th, .table td {
            vertical-align: middle !important;
        }

        @media (max-width: 992px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="d-flex flex-column flex-lg-row">
    <div class="sidebar">
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
            <h3 class="fw-bold">@yield('title')</h3>
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

</body>
</html>
