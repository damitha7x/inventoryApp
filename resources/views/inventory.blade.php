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
                    <!-- Product Row -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Women's Pro Long Sleeve Performance Shirt in DezTek Lite</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>73 In Stock For 5 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>6</td>
                        <td>3</td>
                        <td>Activewear Tops</td>
                        <td>Encore</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details1">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Collapsible details -->
                    <tr class="collapse" id="details1">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aqua</td>
                                        <td>M</td>
                                        <td>23</td>
                                        <td>$68.00</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td>L</td>
                                        <td>10</td>
                                        <td>$68.00</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Black</td>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>$68.00</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Another sample product -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men’s Short Sleeve Performance Shirt in CoolTech Fabric</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>68 In Stock For 18 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>7</td>
                        <td>4</td>
                        <td>Activewear Tops</td>
                        <td>NextGen</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>

                    <tr class="collapse" id="details2">
                        <td></td>
                        <td colspan="8">
                            <div class="p-3 bg-light border rounded">
                                <small>Details for product variants...</small>
                            </div>
                        </td>
                    </tr>

                    <!-- Product Row 1 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men's Pro Long Sleeve Performance Shirt in DezTek Lite</span>
                        </td>
                        <td><span class="badge bg-secondary">Draft</span></td>
                        <td>0 In Stock<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>5</td>
                        <td>2</td>
                        <td>Activewear Tops</td>
                        <td>Encore</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details0">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details0">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>0</td>
                                        <td>$0.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 2 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Women's Pro Long Sleeve Performance Shirt in DezTek Lite</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>73 In Stock For 5 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>6</td>
                        <td>3</td>
                        <td>Activewear Tops</td>
                        <td>Encore</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details1">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details1">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aqua</td>
                                        <td>M</td>
                                        <td>23</td>
                                        <td>$68.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td>L</td>
                                        <td>10</td>
                                        <td>$68.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Black</td>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>$68.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 3 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men's Short Sleeve Performance Shirt in CoolTech Fabric</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>68 In Stock For 18 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>7</td>
                        <td>4</td>
                        <td>Activewear Tops</td>
                        <td>NextGen</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details2">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Red</td>
                                        <td>S</td>
                                        <td>15</td>
                                        <td>$59.00</td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>Gray</td>
                                        <td>M</td>
                                        <td>12</td>
                                        <td>$59.00</td>
                                        <td>5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 4 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Women's Tank Top Breathable Fabric</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>24 In Stock For 22 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>9</td>
                        <td>1</td>
                        <td>Activewear Tops</td>
                        <td>Evergreen</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details3">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details3">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Purple</td>
                                        <td>S</td>
                                        <td>8</td>
                                        <td>$39.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 5 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men's Full Zip Windbreaker Jacket</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>34 In Stock For 12 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>4</td>
                        <td>2</td>
                        <td>Outerwear</td>
                        <td>Element</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details4">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details4">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gray</td>
                                        <td>L</td>
                                        <td>11</td>
                                        <td>$79.00</td>
                                        <td>10%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 6 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Women's Lightweight Hoodie in Soft Fleece</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>18 In Stock For 6 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>3</td>
                        <td>5</td>
                        <td>Outerwear</td>
                        <td>Element</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details5">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details5">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pink</td>
                                        <td>M</td>
                                        <td>6</td>
                                        <td>$64.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 7 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men's Compression Sleeve Top</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>45 In Stock For 2 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>8</td>
                        <td>7</td>
                        <td>Activewear Tops</td>
                        <td>Power</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details6">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details6">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Black</td>
                                        <td>M</td>
                                        <td>25</td>
                                        <td>$48.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Gray</td>
                                        <td>L</td>
                                        <td>20</td>
                                        <td>$48.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 8 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Women's Running Shorts with Pockets</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>23 In Stock For 9 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>11</td>
                        <td>3</td>
                        <td>Activewear Bottoms</td>
                        <td>Swift</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details7">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details7">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Teal</td>
                                        <td>S</td>
                                        <td>13</td>
                                        <td>$32.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Black</td>
                                        <td>M</td>
                                        <td>10</td>
                                        <td>$32.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- Product Row 9 -->
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <img src="https://via.placeholder.com/40" class="rounded me-2">
                            <span>Men's Jogger Pants in Performance Fabric</span>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>98 In Stock For 25 Variants<br><small class="text-muted">Last Update – 25 AUG 25</small></td>
                        <td>12</td>
                        <td>8</td>
                        <td>Activewear Bottoms</td>
                        <td>Swift</td>
                        <td>
                            <button class="btn btn-link text-dark p-0" data-bs-toggle="collapse" data-bs-target="#details8">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse" id="details8">
                        <td></td>
                        <td colspan="8">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Variant</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Navy</td>
                                        <td>L</td>
                                        <td>33</td>
                                        <td>$55.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Gray</td>
                                        <td>M</td>
                                        <td>30</td>
                                        <td>$55.00</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Black</td>
                                        <td>XL</td>
                                        <td>35</td>
                                        <td>$55.00</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-muted">Showing 1 - 50 of 931 results</span>
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