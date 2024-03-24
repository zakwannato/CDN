<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $DashUsers =  User::select('location', DB::raw('count(*) as total'))
        ->where('role','user')
        ->groupBy('location')
        ->get();

        return view('admin.dashboard')->with('user',$user)->with('DashUsers',$DashUsers);
    }
}
