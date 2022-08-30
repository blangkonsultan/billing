<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Layanan;
use App\Models\Pasien;
use App\Models\Penjamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kunjungan.index', [
            'kunjungan' => Kunjungan::with('pasien', 'layanan', 'penjamin')
                ->orderBy('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kunjungan.create', [
           'pasien' => Pasien::get(),
           'penjamin' => Penjamin::get(),
           'layanan' => Layanan::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $formrequest = $request->merge([
            'tgl_mulai'=> date('Y-m-d')
        ])->all();
        $validate = Validator::make($formrequest, [
            'pasien_id' => 'required|exists:ms_pasien,id',
            'layanan_id' => 'required|exists:ms_layanan,id',
            'penjamin_id' => 'required|exists:ms_penjamin,id',
            'tgl_mulai' => 'required|date',
        ])->validate();

        Kunjungan::create($validate);

        return redirect()
            ->route('kunjungan.index')
            ->with('Success', 'Berhasil Input Kunjungan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function show(Kunjungan $kunjungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kunjungan $kunjungan)
    {
        // dd($kunjungan);
        return view('pages.kunjungan.edit', [
            'pasien' => Pasien::get(),
            'layanan' => Layanan::get(),
            'penjamin' => Penjamin::get(),
            'kunjungan' => $kunjungan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kunjungan $kunjungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kunjungan $kunjungan)
    {
        //
    }

    public function cetak(Kunjungan $kunjungan)
    {
        //
    }
}
