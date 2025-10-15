@extends('layouts.app')

@section('title', 'Inventory')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="d-flex flex-wrap gap-2 mb-3 justify-content-between align-items-center">
            <div class="d-flex gap-2 flex-wrap">
                <select class="form-select form-select-sm">
                    <option>Number of Product | All</option>
                </select>
                <select class="form-select form-select-sm">
                    <option>Total Product | All</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <input type="text" class="form-control form-control-sm" placeholder="Search">
                <button class="btn btn-outline-secondary btn-sm">Export</button>
                <button class="btn btn-outline-secondary btn-sm">Import</button>
            </div>
        </div>

        <ul class="nav nav-pills mb-3">
            <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Active</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Draft</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Achieved</a></li>
        </ul>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Inventory</th>
                        <th>Sales Channels</th>
                        <th>Markets</th>
                        <th>Category</th>
                        <th>Vendor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://via.placeholder.com/40" class="rounded me-2">
                                <span>{{ $product['name'] }}</span>
                            </td>
                            <td><span class="badge bg-{{ $product['status'] == 'Active' ? 'success' : 'secondary' }}">{{ $product['status'] ?? 'Draft' }}</span></td>
                            <td>{{ $product['stock'] }} In Stock For {{ count($product['variants']) }} Variants<br><small class="text-muted">Last Update – {{ $product['last_update'] ?? '25 AUG 25' }}</small></td>
                            <td>{{ $product['sales_channels'] ?? 'N/A' }}</td>
                            <td>{{ $product['markets'] ?? 'N/A' }}</td>
                            <td>{{ $product['category'] }}</td>
                            <td>{{ $product['vendor'] ?? 'N/A' }}</td>
                            <td>
                                <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details{{ $product['id'] }}">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="collapse" id="details{{ $product['id'] }}">
                            <td></td>
                            <td colspan="8">
                                <table class="table table-sm mb-0">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Product</th>
                                            <th>Variant</th>
                                            <th>Size</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product['variants'] as $variant)
                                            <tr>
                                                <td>{{ $product['name'] }}</td>
                                                <td>{{ $variant['color'] }}</td>
                                                <td>{{ $variant['size'] }}</td>
                                                <td>{{ $variant['quantity'] }}</td>
                                                <td>{{ number_format($variant['price'] ?? $product['price'], 2) }}</td>
                                                <td>{{ $variant['discount'] ?? '0%' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-muted">Showing 1 - {{ count($products) }} of {{ count($products) }} results</span>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link">&lt;</a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">&gt;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection