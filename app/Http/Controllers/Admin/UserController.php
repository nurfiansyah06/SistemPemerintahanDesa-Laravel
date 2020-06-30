<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\PendudukExport;
use Excel;
use PDF;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Fam;
use App\Birth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
    
        return view ('pages.admin.user.index',[
            'users' => $users,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create([
        'nik'=> $request['nik'],
        'email' => $request['email'],
        'name' => $request['name'], 
        'password' => Hash::make($request['password']),
        'agama'=>$request['agama'],
        'jns_kelamin'=>$request['jns_kelamin'],
        'jns_pekerjaan'=>$request['jns_pekerjaan'],
        'alamat'=>$request['alamat'],
        'status_kawin'=>$request['status_kawin'],
        'status_migrasi'=>$request['status_migrasi']
        ]);

        Birth::create([
            'no_aktalahir' => $request['no_aktalahir'],
            'tgl_lahir' => $request['tgl_lahir'],
            'tmpt_lahir' => $request['tmpt_lahir']
        ]);

        Fam::create([
            'no_kk' => $request['no_kk'],
            'jabatan' => $request['jabatan'],
        ]);
        return redirect()->route('penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $nik)
    {
        $user = User::FindorFail($nik);
        return view ('pages.admin.user.detail',[
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $user = User::FindorFail($nik);
        
        return view ('pages.admin.user.edit',[
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $data = $request->all();
        
        $user = User::FindorFail($nik);
        $user->update($data);

        return redirect()->route('penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::FindorFail($id);
        $user->delete();

        return redirect()->route('penduduk.index');
    }

    public function export() 
    {
        return Excel::download(new PendudukExport, 'Penduduk.xlsx');
    }

    public function exportpdf()
    {
        $pdf = PDF::loadHTML('<h1>HALO DATA</h1>');
        return $pdf->download('penduduk.pdf');
    }
}
