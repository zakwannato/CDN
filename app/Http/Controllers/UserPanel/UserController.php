<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user.profile')->with('user',$user);
    }

    public function edit()
    {
        $user = auth()->user();
        return view('user.edit')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
        // Find the user
        $user = User::findOrFail($id);
        // dd($request->location);
        // Update user data
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'education' => $request->education,
            'experience' => $request->experience,
            'location' => $request->location,
            'skill1' => $request->has('skill1') ? 1 : 0,
            'skill2' => $request->has('skill2') ? 1 : 0,
            'skill3' => $request->has('skill3') ? 1 : 0,
            'skill4' => $request->has('skill4') ? 1 : 0,
            'skill5' => $request->has('skill5') ? 1 : 0,
        ]);
       
        return redirect()->route('user.profile', ['success' => 'User data updated successfully!']);


    }

    public function destroy(Request $request): RedirectResponse
    {
 
        $user = User::findOrFail($request->id);
        $user->delete();

   
        return Redirect::to('/');
    }
}
