<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Layanan;
use App\Models\Pasien;
use App\Models\Pelayanan;
use App\Models\Penjamin;
use App\Models\Unit;
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
            'unit' => Unit::get()
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

        $formrequest = $request->merge([
            'tgl_mulai' => date('Y-m-d')
        ])->all();
        $validate_kunjungan = Validator::make($formrequest, [
            'pasien_id' => 'required|exists:ms_pasien,id',
            'layanan_id' => 'required|exists:ms_layanan,id',
            'penjamin_id' => 'required|exists:ms_penjamin,id',
            'tgl_mulai' => 'required|date',
        ])->validate();

        $kunjungan = Kunjungan::create($validate_kunjungan);

        foreach ($request->addMore as $key => $value) {
            // dd($value);
            $formpelayanan = $request->merge([
                'kunjungan_id' => $kunjungan->id,
                'tgl_pelayanan' => date('Y-m-d'),
                'unit_id' => $value['unit_id']
            ])->all();

            $validate_pelayanan = Validator::make($formpelayanan, [
                'kunjungan_id' => 'required|exists:kunjungan,id',
                'unit_id' => 'required|exists:ms_unit,id',
                'tgl_pelayanan' => 'required|date',
            ])->validate();

            Pelayanan::create($validate_pelayanan);
        }

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
        $pelayanan = Pelayanan::with('unit', 'kunjungan')->where('kunjungan_id','=',$kunjungan->id)->get();

        return view('pages.kunjungan.edit', [
            'pasien' => Pasien::get(),
            'layanan' => Layanan::get(),
            'penjamin' => Penjamin::get(),
            'kunjungan' => $kunjungan,
            'pelayanan' => $pelayanan,
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
