<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\UserServiceInterface;
use App\Services\Contracts\RoleServiceInterface;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private UserServiceInterface $userService,
        private RoleServiceInterface $roleService
    ) {}

    public function index(): View
    {
        $totalUsers = $this->userService->getAllUsers()->count();
        $totalRoles = $this->roleService->getAllRoles()->count();
        
        return view('admin.dashboard', compact('totalUsers', 'totalRoles'));
    }
}
