@extends('partials._main')
@section('title', 'Students')

@section('content')

<div style="margin-left: 250px; padding: 20px; min-height: 100vh; background:#f9fafb;">

   <h6 class="fw-bold mb-3 fs-4">
      <i class="fas fa-users rounded-circle text-primary me-2"></i>Students
   </h6>
   <small class="d-block mb-3" style="font-size: 10px; color: #9DA9C7;">
      Manage student records and payments
   </small>

   <div class="card mb-4" style="border-radius: 12px;">
        <div class="card-body">
            <span class="d-block fs-6 fw-semibold text-dark mb-3">Search & Filter Students</span>
            
            <div class="d-flex flex-wrap gap-2">
                <!-- Search -->
                <div class="flex-grow-1">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Search by name, email, or student ID">
                    </div>
                </div>

                <!-- Filter by Course -->
                <select class="form-select w-auto">
                    <option selected disabled>Filter by course</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIS">BSIS</option>
                </select>

                <!-- Filter by Year -->
                <select class="form-select w-auto">
                    <option selected disabled>Filter by year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                </select>
            </div>
        </div>
    </div> 

   <div class="card shadow-sm border-0">
      <div class="card-body p-0">
         <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <span class="fs-6 fw-semibold text-dark">
               <i class="fas fa-graduation-cap text-primary me-2"></i>All Students
            </span>
            <button class="btn btn-outline-primary btn-sm">
               <i class="fas fa-filter me-1"></i> Filters
            </button>
         </div>

         <div class="table-responsive">
            <table class="table align-middle mb-0 table-custom-striped">
               <thead class="table-light">
                  <tr>
                     <th>Student</th>
                     <th>Course & Year</th>
                     <th>Payment Status</th>
                     <th>Amount</th>
                     <th>Last Payment</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- Row 1 -->
                  <tr>
                     <td>
                        <div class="fw-semibold">Sarah Johnson</div>
                        <div class="text-muted small">sarah.j@email.com</div>
                        <div class="text-muted small">STU001</div>
                     </td>
                     <td>
                        <div class="fw-semibold">Computer Science</div>
                        <div class="text-muted small">3rd Year</div>
                     </td>
                     <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                     <td class="fw-bold">$450</td>
                     <td>2024-01-15</td>
                     <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                     </td>
                  </tr>
                  <!-- Row 2 -->
                  <tr>
                     <td>
                        <div class="fw-semibold">Michael Chen</div>
                        <div class="text-muted small">m.chen@email.com</div>
                        <div class="text-muted small">STU002</div>
                     </td>
                     <td>
                        <div class="fw-semibold">Business Administration</div>
                        <div class="text-muted small">2nd Year</div>
                     </td>
                     <td><span class="badge bg-danger-subtle text-danger">Unpaid</span></td>
                     <td class="fw-bold">$380</td>
                     <td>2023-12-20</td>
                     <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                     </td>
                  </tr>
                  <!-- Row 3 -->
                  <tr>
                     <td>
                        <div class="fw-semibold">Emma Davis</div>
                        <div class="text-muted small">emma.davis@email.com</div>
                        <div class="text-muted small">STU003</div>
                     </td>
                     <td>
                        <div class="fw-semibold">Engineering</div>
                        <div class="text-muted small">4th Year</div>
                     </td>
                     <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                     <td class="fw-bold">$520</td>
                     <td>2024-01-18</td>
                     <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                     </td>
                  </tr>
                  <!-- Row 4 -->
                  <tr>
                     <td>
                        <div class="fw-semibold">James Wilson</div>
                        <div class="text-muted small">j.wilson@email.com</div>
                        <div class="text-muted small">STU004</div>
                     </td>
                     <td>
                        <div class="fw-semibold">Arts & Design</div>
                        <div class="text-muted small">1st Year</div>
                     </td>
                     <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                     <td class="fw-bold">$300</td>
                     <td>2024-01-10</td>
                     <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>

</div>

@endsection
