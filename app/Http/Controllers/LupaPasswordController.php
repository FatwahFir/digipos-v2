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

    public function cek_password(Request $request , User $user){
    // $account = Auth::user();
    $user = User::where('username', '=', $request->get('username'))->first();
    if ($user === null) {
        return "Tidak Ada";
    }else{

        $request->validate([
            'password' => 'required|confirmed|min:6|string',
        ]);

        $user->update(['password' => bcrypt($request->password)]);

        }
        
        return redirect()->route('login')
        ->with('success','Ubah Password Berhasil');
    } 
}
