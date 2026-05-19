<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Menu</span>
        </h6>
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            
            @if(auth()->check() && auth()->user()->isAdmin())
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.*') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-shield-lock me-2"></i>
                        Admin Panel
                    </a>
                </li>
            @endif
            
            @if(auth()->check() && auth()->user()->isSenior())
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('senior.*') ? 'active' : '' }}" href="{{ route('senior.dashboard') }}">
                        <i class="bi bi-book me-2"></i>
                        Senior Resources
                    </a>
                </li>
            @endif
            
            @if(auth()->check() && auth()->user()->isFresher())
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fresher.*') ? 'active' : '' }}" href="{{ route('fresher.dashboard') }}">
                        <i class="bi bi-lightbulb me-2"></i>
                        Fresher Guide
                    </a>
                </li>
            @endif
        </ul>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Account</span>
        </h6>
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i class="bi bi-person me-2"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start w-100">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<style>
    .sidebar {
        position: fixed;
        top: 56px;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }
    
    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }
    
    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }
    
    .nav-link {
        font-weight: 500;
        color: #333;
        padding: .75rem 1rem;
        border-radius: .25rem;
        margin: 0 .5rem;
    }
    
    .nav-link:hover {
        color: #0d6efd;
        background-color: rgba(13, 110, 253, .1);
    }
    
    .nav-link.active {
        color: #0d6efd;
        background-color: rgba(13, 110, 253, .1);
    }
</style>
