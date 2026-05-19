<?php

namespace App\Http\Controllers\Fresher;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('fresher.dashboard');
    }
}
