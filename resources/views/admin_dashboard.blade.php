@extends('partials._main')
@section('title', 'Dashboard')

@section('content')

<div class="card shadow mb-3" style="background: linear-gradient(90deg, #007bff, #17a2b8); border: none; border-radius: 12px;">
    <div class="card-body text-white">
        <span class="d-block fs-4 fw-semibold text-warning">Welcome to TourPay Admin</span>
        <small class="d-block" style="font-size: 12px; color: #e3f2fd;">
            Manage student payments and track collections efficiently
        </small>
    </div>
</div>

<div class=" row g-3">
    <div class=" col-md-3">
        <div class="card shadow-sm  border-0" style="border-radius: 15px; background: #FDFFF0; ">
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




@endsection