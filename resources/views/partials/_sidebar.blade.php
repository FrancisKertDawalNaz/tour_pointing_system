<div id="sidebar" class="d-flex flex-column shadow-sm"
    style="width: 260px; background: #fff; color: #333; height: 100vh; 
           position: fixed; top: 0; left: 0; border-right: 1px solid #eee;">

    <!-- Logo -->
    <div class="d-flex align-items-center p-3 border-bottom" style="height: 70px;">
        <img src="{{ asset('image/ccs.png') }}" alt="Logo" style="width:40px; height:40px;" class="me-2">
        <h5 class="fw-bold mb-0 text-primary">TourPay</h5>
    </div>

    <!-- Navigation -->
    <div class="flex-grow-1 p-3">
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center rounded px-3 py-2 sidebar-link">
                    <i class="fas fa-tachometer-alt me-2 text-primary"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('student') }}" class="nav-link d-flex align-items-center rounded px-3 py-2 sidebar-link">
                    <i class="fas fa-user-graduate me-2 text-primary"></i> Students
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('payment') }}" class="nav-link d-flex align-items-center rounded px-3 py-2 sidebar-link">
                    <i class="fas fa-money-check-alt me-2 text-primary"></i> Payments
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center rounded px-3 py-2 sidebar-link">
                    <i class="fas fa-chart-bar me-2 text-primary"></i> Reports
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center rounded px-3 py-2 sidebar-link">
                    <i class="fas fa-cog me-2 text-primary"></i> Settings
                </a>
            </li>
        </ul>
    </div>

    <!-- Logout -->
    <div class="p-3 border-top">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-light w-100 text-start d-flex align-items-center sidebar-link">
                <i class="fas fa-sign-out-alt me-2 text-primary"></i> Logout
            </button>
        </form>
    </div>
</div>

<style>
    .sidebar-link {
        color: #555;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .sidebar-link:hover {
        background: #f0f4ff;
        color: #007bff !important;
    }
    .sidebar-link.active {
        background: #e6f0ff;
        color: #007bff !important;
        font-weight: 600;
    }
</style>
