@extends('partials._main')
@section('title', 'Dashboard')

@section('content')

<div style="margin-left: 250px; padding: 20px; min-height: 100vh; background:#f9fafb;">

    <div class="card shadow mb-3" style="background: linear-gradient(90deg, #007bff, #17a2b8); border: none; border-radius: 12px;">
        <div class="card-body text-white">
            <span class="d-block fs-4 fw-semibold text-warning">Welcome to TourPay Admin</span>
            <small class="d-block" style="font-size: 12px; color: #e3f2fd;">
                Manage student payments and track collections efficiently
            </small>
        </div>
    </div>

    <div class="row g-3">
        <!-- Total Students -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">2,847</h4>
                            <small class="text-muted">Active enrollments <span class="text-success">+12%</span></small>
                        </div>
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <p class="mt-2 fw-semibold">Total Students</p>
                </div>
            </div>
        </div>

        <!-- Paid Students -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">2,403</h4>
                            <small class="text-muted">This month <span class="text-success">+8%</span></small>
                        </div>
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <p class="mt-2 fw-semibold">Paid Students</p>
                </div>
            </div>
        </div>

        <!-- Unpaid Students -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">444</h4>
                            <small class="text-muted">Pending payments</small>
                        </div>
                        <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                    </div>
                    <p class="mt-2 fw-semibold">Unpaid Students</p>
                </div>
            </div>
        </div>

        <!-- Total Collected -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">$284,750</h4>
                            <small class="text-muted">This month <span class="text-success">+15%</span></small>
                        </div>
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <p class="mt-2 fw-semibold">Total Collected</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <!-- Recent Payments -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0" style="border-radius: 12px;">
                <div class="card-body">
                    <h6 class="fw-bold mb-3"><i class="fas fa-clock text-primary me-2"></i>Recent Payments</h6>
                    <!-- payments list here -->
                    <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded" style="background: #f8fbff;">
                        <div>
                            <h6 class="mb-0 fw-semibold">Jeffrey</h6>
                            <small class="text-muted">BSIT</small>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold text-success">$450</span><br>
                            <small class="text-muted">2 mins ago</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded" style="background: #f8fbff;">
                        <div>
                            <h6 class="mb-0 fw-semibold">Kenneth</h6>
                            <small class="text-muted">BSIT</small>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold text-success">$380</span><br>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded" style="background: #f8fbff;">
                        <div>
                            <h6 class="mb-0 fw-semibold">Francis</h6>
                            <small class="text-muted">BSIT</small>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold text-success">$520</span><br>
                            <small class="text-muted">12 mins ago</small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-2 rounded" style="background: #f8fbff;">
                        <div>
                            <h6 class="mb-0 fw-semibold">Khen</h6>
                            <small class="text-muted">BSIT</small>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold text-success">$300</span><br>
                            <small class="text-muted">18 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Overview -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0" style="border-radius: 12px;">
                <div class="card-body">
                    <h6 class="fw-bold mb-3"><i class="fas fa-chart-line text-primary me-2"></i>Payment Overview</h6>
                    <!-- overview content here -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-muted">Completion Rate</small>
                        <small class="fw-semibold">84.4%</small>
                    </div>
                    <div class="progress mb-4" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 84.4%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection