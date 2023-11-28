<?php

namespace App\Http\Controllers\Admin;

use App\Models\Classe;
use App\Models\Course;
use App\Models\Group;
use App\Models\Level;
use App\Models\MonthlyLevelPrice;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
