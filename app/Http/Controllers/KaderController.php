<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kader;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use App\DataTables\KaderDataTable;
use App\Http\Requests\StoreKaderRequest;

class KaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KaderDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('users.kader.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = new User();
        $posyandu = Posyandu::get();
        return view('users.kader.kader-action', compact('user' , 'posyandu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKaderRequest $request)
    {
        // dd($request);
        $validatedData = $request;
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create([
            'username' => $validatedData['username'],
            'password' => bcrypt('password'),
        ])->assignRole('kader');
        Kader::create([
            'nama' => $validatedData['name'],
            'user_id' => $user->id,
            'posyandu_id' => $validatedData['posyandu_id'],
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
        $posyandu = Posyandu::get();
        $user = User::findOrFail($id);
        return view('users.kader.kader-action', compact('user' , 'posyandu'));
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
        Kader::where('user_id', $id)->delete();
        User::findOrFail($id)->delete();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil mengubah data'
        ]);
    }
}
