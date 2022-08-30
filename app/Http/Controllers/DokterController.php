<?php

namespace App\Http\Controllers;

use App\Helpers\NipGenerator;
use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dokter.index', [
            'dokter' => Dokter::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nip = (new NipGenerator())->generate([
            'dob' => date('Y-m-d')
        ]);

        $form = $request->merge([
            'nip'=>$nip
        ])->all();

        $validate = Validator::make($form, [
            'nip' => 'required|unique:ms_dokter,nip',
            'nama' => 'required|string'
        ])->validate();

        Dokter::create($validate);
        return redirect()
            ->route('dokter.index')
            ->with('Success', 'Berhasil Input Dokter');
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
    public function edit(Dokter $dokter)
    {
        return view('pages.dokter.edit', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string'
        ])->validate();


        $dokter->update($validate);
        return redirect()
            ->route('dokter.index')
            ->with('Success', 'Berhasil Mengubah Data Pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        return redirect()
        ->route('dokter.index')
        ->with('Success', 'Berhasil Menghapus Data Dokter');
    }
}
