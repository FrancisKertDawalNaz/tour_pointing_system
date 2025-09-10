<!-- Sidebar + Content Wrapper -->
<div class="d-flex" id="wrapper" style="font-family: 'Poppins', sans-serif; min-height: 100vh;">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white border-end shadow-sm p-3 d-flex flex-column" style="width: 250px; transition: 0.3s;">
        <h4 class="text-center fw-semibold mb-4">
            <i class="fas fa-user-cog text-danger me-2"></i> 
            <span class="sidebar-label">Admin Panel</span>
        </h4>

        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-dark px-3 py-2 rounded hover-effect">
                    <i class="fas fa-chart-line me-2 text-fanger"></i> Dashboard
                </a>
            </li>
        </ul>
        <hr class="my-4 text-muted"> 
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-3 pt-6">
            @csrf
            <button type="submit" class="btn hover-effect w-100">
                <i class="fas fa-sign-out-alt me-2"></i> <span class="sidebar-label">Logout</span>
            </button>
        </form>
    </div>
</div>