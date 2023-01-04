<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\DataTables\UserDatatable;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDatatable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('users.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = new User();
        return view('users.admin.user-action', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        // dd($request);
        $validatedData = $request;
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create([
            'username' => $validatedData['username'],
            'password' => bcrypt('password'),
        ])->assignRole('super admin');
        Admin::create([
            'nama' => $validatedData['name'],
            'user_id' => $user->id
        ]);

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil menambahkan akun admin'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.admin.user-action', compact('user'));
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
        $user = User::findOrFail($id);
        if($request->username != $user->username){
            $rules = ['username' => 'required|unique:users|min:6', 'name' => 'required|max:255'];
            $validatedData = $request->validate($rules);
            User::where('id', $id)->update(['username' => $validatedData['username']]);
            Admin::where('user_id', $id)->update(['nama' => $validatedData['name']]);
        }else{
            $rules = ['name' => 'required|max:255'];
            $validatedData = $request->validate($rules);
            Admin::where('user_id', $id)->update(['nama' => $validatedData['name']]);
            
        }



        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil mengubah data'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('user_id', $id)->delete();
        User::findOrFail($id)->delete();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil mengubah data'
        ]);
    }
}
