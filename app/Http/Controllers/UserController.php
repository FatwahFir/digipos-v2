<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Admin;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\AdminPuskesmas;
use App\Http\Requests\StoreAdminRequest;
use App\DataTables\AdminPuskesmasDataTable;
use App\DataTables\UserDatatable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDatatable $dataTable)
    {
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
        // $posyandu = Posyandu::get();
        // dd($user->id);
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

        // dd(Admin::create);
        
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
        //
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
                // dd($request);
                // $user = User::findOrFail($id);
                // $regencies = Regency::get();
                // $rules = [
                //     'name' => 'required|max:255',
                //     'regency_id' => 'required'
                // ];
        
                // if($request->email != $user->email){
                //     $rules['email'] = 'required|unique:users|email:dns';
                // }else{
                //     $rules['email'] = 'required';
                // }
                // if($request->username != $user->username){
                //     $rules['username'] = 'required|unique:users|min:4';
                // }else{
                //     $rules['username'] = 'required';
                // }
        
                // $validatedData = $request->validate($rules);
                // // dd($validatedData);
        
                // User::where('id', $id)->update([
                //     'username' => $validatedData['username'],
                //     'email' => $validatedData['email'],
                // ]);
        
                // Kader::where('user_id', $id)->update([
                //     'name' => $validatedData['name'],
                //     'phone' => $validatedData['phone'],
                // ]);
                // Bidan::where('user_id', $id)->update([
                //     'name' => $validatedData['name'],
                //     'phone' => $validatedData['phone'],
                // ]);

                
        
                // return response()->json([
                //     'status' => 'Success',
                //     'message' => 'Account updated successfully'
                // ]);

                $user = User::findOrFail($id);
                    $rules = [
                        'name' => 'required|max:255',
                        'password' => 'required|min:6|max:255'
                    ];
                    if($request->username != $user->username){
                        $rules['username'] = 'required|unique:users|min:6';
                    }

                    $validatedData = $request->validate($rules);

                    User::where('id', $id)->update($validatedData);

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
        //
    }
}
