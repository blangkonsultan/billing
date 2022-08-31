<?php

namespace App\Http\Controllers;

use App\Models\Ms_Tindakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Ms_TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.ms_tindakan.index', [
            'ms_tindakan' => Ms_Tindakan::orderBy('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ms_tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string',
            'harga' => 'required|int'
        ])->validate();

        Ms_Tindakan::create($validate);

        return redirect()
            ->route('ms_tindakan.index')
            ->with('Success', 'Berhasil Input Tindakan');
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
    public function edit(Ms_Tindakan $ms_tindakan)
    {
        return view('pages.ms_tindakan.edit', [
            'ms_tindakan' => $ms_tindakan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ms_Tindakan $ms_tindakan)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string',
            'harga' => 'required|int'
        ])->validate();

        $ms_tindakan->update($validate);

        return redirect()
            ->route('ms_tindakan.index')
            ->with('Success', 'Berhasil Mengubah Data Tindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ms_Tindakan $ms_tindakan)
    {
        $ms_tindakan->delete();
        return redirect()
        ->route('ms_tindakan.index')
        ->with('Success', 'Berhasil Menghapus Data Tindakan');
    }
}
