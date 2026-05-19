<x-layouts.app>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted">Total Users</h6>
                            <h3 class="card-text">{{ $totalUsers }}</h3>
                        </div>
                        <div class="text-primary">
                            <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted">Total Roles</h6>
                            <h3 class="card-text">{{ $totalRoles }}</h3>
                        </div>
                        <div class="text-success">
                            <i class="bi bi-shield-fill-check" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted">Active Sessions</h6>
                            <h3 class="card-text">--</h3>
                        </div>
                        <div class="text-info">
                            <i class="bi bi-activity" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Quick Actions</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="#" class="btn btn-primary w-100">
                        <i class="bi bi-person-plus-fill me-2"></i>Add User
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="btn btn-success w-100">
                        <i class="bi bi-shield-plus me-2"></i>Manage Roles
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="btn btn-info w-100">
                        <i class="bi bi-gear-fill me-2"></i>Settings
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="btn btn-secondary w-100">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Reports
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Recent Activity</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">No recent activity to display.</p>
        </div>
    </div>
</x-layouts.app>
