<x-layouts.app>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Senior Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">My Profile</button>
            </div>
        </div>
    </div>

    <div class="alert alert-info">
        <i class="bi bi-info-circle-fill me-2"></i>
        Welcome back, {{ auth()->user()->name }}! You have access to senior resources and mentorship tools.
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-book me-2"></i>Study Resources</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Access advanced study materials, past papers, and reference guides.</p>
                    <a href="#" class="btn btn-primary">View Resources</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-people me-2"></i>Mentorship</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Connect with mentors or become a mentor for freshers.</p>
                    <a href="#" class="btn btn-success">Join Mentorship</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-calendar-event me-2"></i>Events & Workshops</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Register for senior-exclusive events and workshops.</p>
                    <a href="#" class="btn btn-info">View Events</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-trophy me-2"></i>Achievements</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Track your academic achievements and certifications.</p>
                    <a href="#" class="btn btn-warning">View Achievements</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
