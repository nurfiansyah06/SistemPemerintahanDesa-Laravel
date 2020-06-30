<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surat;

class SuratWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *`
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surats = Surat::all();

        return view('pages.warga.indexsurat',[
            'surats' => $surats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surat = new Surat;
        $surat->name = $request->name;
        $surat->nik = $request->nik;
        $surat->alamatrumah = $request->alamatrumah;
        $surat->jns_surat = $request->jns_surat;
        $surat->keperluan = $request->keperluan;
        $surat->status = 'DIPROSES';
        $surat->save();
        return redirect()->route('suratwarga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = Surat::FindorFail($id);

        return view ('pages.warga.detailsurat',[
            'surat' => $surat
        ]);
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
        $data = $request->all();
        
        $surat = Surat::FindorFail($id);
        $surat->update($data);

        return redirect()->back();
    }

    /**
     * Resurat the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = Surat::FindorFail($id);
        $surat->delete();

        return redirect()->route('suratwarga.index');
    }
}
