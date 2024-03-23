<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $DirUsers = User::all()->where('role','user');
        return view('admin.directory')->with('DirUsers',$DirUsers)->with('user',$user);
    }
}
