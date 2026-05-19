<?php

namespace App\Http\Controllers\Senior;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('senior.dashboard');
    }
}
