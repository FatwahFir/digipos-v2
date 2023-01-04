<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Bidan;
use App\Models\Kader;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\AdminPuskesmas;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);

        return view('profile.index', compact( 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $puskesmas = Puskesmas::get();

        if(Auth::user()->admin){
            $user = User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        } elseif(Auth::user()->kader){
            $user = User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        } elseif(auth::user()->AdminPuskesmas){
            $user =  User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        }elseif (auth::user()->bidan) {
            $user =  User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        }else {
            $user =  User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        }
        // dd($user->nama);
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::with('admin','kader', 'AdminPuskesmas', 'bidan')->where('id',Auth::user()->id)->first();
        // dd($data);
        if(Auth::user()->admin){
                $data->admin->update([ 'nama' => $request->nama]);
        }
        elseif(Auth::user()->kader){
                $data->kader->update([
                    'nama' => $request->nama,
                    'phone' => $request->phone,
                ]);
        }elseif(Auth::user()->AdminPuskesmas){
                    $data->AdminPuskesmas->update([
                        'nama' => $request->nama,
                        'phone' => $request->phone,
                    ]);
        }elseif(Auth::user()->bidan){
                    $data->bidan->update([
                        'nama' => $request->nama,
                        'phone' => $request->phone,
                    ]);
        }else{
                $data->admin->update($request->except('nama','phone'));
        }    
    
        return redirect()->back()->with('success', 'Profile Berhasil Diupdate!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
