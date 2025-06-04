@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="text-center mb-5">
        <h2 class="display-4 mb-4 text-primary">@lang("Welcome")</h2>
        <p class="lead mb-4 text-muted">@lang("Slogon")</p>
    </div>

    <!-- Main Navigation Buttons -->
    <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
            <a href="/customers" class="btn btn-gradient-ocean btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-users me-2"></i>
                @lang("List of Customers")
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="/suppliers" class="btn btn-gradient-forest btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-truck me-2"></i>
                {{ __("List of Suppliers") }}
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('products.index') }}" class="btn btn-gradient-sunset btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-box me-2"></i>
                {{ trans("List of Products") }}
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="/products-by-category" class="btn btn-gradient-purple btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-tags me-2"></i>
                Products by Category
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="/products-by-supplier" class="btn btn-gradient-pink btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-industry me-2"></i>
                Products by Supplier
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="/products-by-store" class="btn btn-gradient-teal btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-store me-2"></i>
                Products by Store
            </a>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('orders.index') }}" class="btn btn-gradient-red btn-lg w-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-shopping-cart me-2"></i>
                Orders details by customer
            </a>
        </div>
    </div>

    <!-- Advanced Features Section -->
    <div class="text-center mb-4">
        <h4 class="text-secondary">Advanced Analytics & Reports</h4>
        <hr class="w-25 mx-auto">
    </div>

    <div class="row g-4">
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('ordered.products') }}" class="btn btn-gradient-info btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-link me-2"></i>
                View Ordered Products (Eloquent join example)
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('same.products.customers') }}" class="btn btn-gradient-warning btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-user-friends me-2"></i>
                Customers Who Ordered the Same Products as Mateo Tillman
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('products.orders_count') }}" class="btn btn-gradient-dark btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-chart-bar me-2"></i>
                Show Number of Orders per Product
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('products.more_than_6_orders') }}" class="btn btn-gradient-primary btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-fire me-2"></i>
                Products with More Than 6 Orders
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('orders.totals') }}" class="btn btn-gradient-success btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-dollar-sign me-2"></i>
                Show Total Amount per Order
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="{{ route('orders.greater_than_60') }}" class="btn btn-gradient-danger btn-lg w-100 h-100 d-flex align-items-center justify-content-center shadow-lg">
                <i class="fas fa-trophy me-2"></i>
                Orders with Total Greater Than Order 60
            </a>
        </div>
    </div>

    <!-- Sales Chart Section -->
    <div class="text-center mb-4 mt-5">
        <h4 class="text-secondary">Sales Overview</h4>
        <hr class="w-25 mx-auto">
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h5 class="card-title text-center mb-4">Monthly Sales Performance</h5>
                    <canvas id="salesChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection