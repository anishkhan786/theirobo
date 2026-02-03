<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use Auth;


class DashboardController extends Controller
{
    public function index(User $model)
    {
        $auth_id = Auth::user()->id;
        $user_count = 0;
        $counsellor_top_5_data = 0;
        $counsellor_count = 0;
        return view('dashboards.admin-dashboard');  
    }
}