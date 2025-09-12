<div class="d-flex" id="wrapper" style="font-family: 'Poppins', sans-serif;">
    <!-- Sidebar -->
    <div id="sidebar" class="border-end shadow-sm p-3 d-flex flex-column"
        style="width: 250px; background-color:#222222; color:white;
               height: 100vh; position: fixed; top: 0; left: 0; overflow-y: auto;">
        
        <h4 class="text-center fw-semibold mb-4">
            <div class="text-center">
                <img src="{{ asset('image/ccs.png') }}" alt="Admin Icon"
                    style="width:50px; height:50px; object-fit:contain;">
            </div>
            <div class="text-center mt-2">
                <span class="sidebar-label fs-5 text-warning d-block">Admin Panel</span>
                <small class=" d-block" style="font-size: 10px;color: #9DA9C7;">Payment Management</small>
            </div>
        </h4>

        <p style="font-size: 12px;" class="text-warning">Navigation</p>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard') }}" class="nav-link text-white px-3 py-2 rounded hover-effect">
                    <i class="fas fa-tachometer-alt text-warning me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('student') }}" class="nav-link text-white px-3 py-2 rounded hover-effect">
                    <i class="fas fa-user-graduate text-warning me-2"></i> Students
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('payment') }}" class="nav-link text-white px-3 py-2 rounded hover-effect">
                    <i class="fas fa-money-check-alt text-warning me-2"></i> Payments
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white px-3 py-2 rounded hover-effect">
                    <i class="fas fa-chart-bar text-warning me-2"></i> Reports
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white px-3 py-2 rounded hover-effect">
                    <i class="fas fa-cog text-warning me-2"></i> Settings
                </a>
            </li>
        </ul>

        <hr class="my-4 text-light">
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-auto">
            @csrf
            <button type="submit" class="btn btn-outline-warning w-100">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </button>
        </form>
    </div>
</div>
