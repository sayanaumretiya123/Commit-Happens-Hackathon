<x-layouts.app>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fresher Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">My Profile</button>
            </div>
        </div>
    </div>

    <div class="alert alert-success">
        <i class="bi bi-check-circle-fill me-2"></i>
        Welcome to Campus Intelligence, {{ auth()->user()->name }}! Start your journey here.
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-lightbulb me-2"></i>Getting Started Guide</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Learn the basics of campus life, navigation, and resources.</p>
                    <a href="#" class="btn btn-primary">Start Guide</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-map me-2"></i>Campus Map</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Interactive map to help you find your way around campus.</p>
                    <a href="#" class="btn btn-success">View Map</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-question-circle me-2"></i>FAQ</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Frequently asked questions and answers for new students.</p>
                    <a href="#" class="btn btn-info">View FAQ</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-chat-dots me-2"></i>Connect with Mentors</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Find senior students who can guide you through your journey.</p>
                    <a href="#" class="btn btn-warning">Find Mentors</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="bi bi-calendar3 me-2"></i>Upcoming Events</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">No upcoming events at the moment. Check back later!</p>
        </div>
    </div>
</x-layouts.app>
