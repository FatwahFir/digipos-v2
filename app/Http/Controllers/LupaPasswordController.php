<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LupaPasswordController extends Controller
{
    public function index()
    {
        // $this->authorize('read');
        return view('lupaPassword');
    }

    public function cek_password(Request $request){
    // $account = Auth::user();
    $user = User::where('username', $request->username)->first();
    if (!$user) {
        $messages = "Username not found";
        return redirect()->back()->withErrors($messages)->with('error', $messages);
    }else{

        $request->validate([
            'password' => 'required|confirmed|min:6|string',
        ]);

        if($request->password != $request->password_confirmation){
            $messages = "The password confirmation does not match";
            return redirect()->back()->withErrors($messages)->with('error', $messages);
        }

        $user->update(['password' => bcrypt($request->password)]);
    }
        
        return redirect()->route('login')
        ->with('success','Ubah Password Berhasil');
    } 
}
