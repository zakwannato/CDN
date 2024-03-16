<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin.directory')->with('user',$user);
    }
}
