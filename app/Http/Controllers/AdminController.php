<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
class AdminController extends Controller
{
    public function Adminlogin(Request $request){
       //dd($request->all());

    $user = User::where('email', $request->email)
                ->where('type', 'A')
                ->where('status', 'A')
                ->first();
    //dd($user);

    if (!$user) {
        return back()->with('error', 'Invalid Email');
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Invalid Password');
    }

    Auth::login($user);

    $request->session()->regenerate();

    return redirect()->route('get-admin-dashboard');
}
}
