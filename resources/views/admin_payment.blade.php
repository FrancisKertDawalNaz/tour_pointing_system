@extends('partials._main')
@section('title', 'Payments')

@section('content')

<div style="margin-left: 250px; padding: 20px; min-height: 100vh; background:#f9fafb;">

   <h6 class="fw-bold mb-3 fs-4"><i class="fas fa-credit-card  rounded-circle text-primary me-2"></i>Payments</h6>
   <small class=" d-block mb-3" style="font-size: 10px;color: #9DA9C7;">Track and manage student payments</small>
   
   <div class="row g-3">
      <!-- Total Students -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div> 
                            <small class="text-muted">Paid This Month</small>
                            <h4 class="fw-bold mb-4">2,847</h4>
                        </div>
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <span class="text-success">+8% from last month</span>
                </div>
            </div>
        </div>

        <!-- Paid Students -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div> 
                            <small class="text-muted">Unpaid Students</small>
                            <h4 class="fw-bold mb-4">444</h4>
                        </div>
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <span class="text-warning">Requires attention</span>
                </div>
            </div>
        </div>

        <!-- Unpaid Students -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background: #FDFFF0;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div> 
                            <small class="text-muted">Total Collected</small>
                            <h4 class="fw-bold mb-4">284,750</h4>
                        </div>
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <span class="text-primary">This month</span>
                </div>
            </div>
        </div>
   </div>

</div>

@endsection