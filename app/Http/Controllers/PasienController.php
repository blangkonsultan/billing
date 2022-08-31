<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pasien.index', [
            'pasien' => Pasien::orderBy('id')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pasien.create');
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
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|int',
            'alamat' => 'required|string',
        ])->validate();

        Pasien::create($validate);
        return redirect()
            ->route('pasien.index')
            ->with('Success', 'Berhasil Input Pasien');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
        if ($cari == null) {
            return view('pages.pasien.index', [
                'pasien' => Pasien::orderBy('id')->get(),

            ]);
        }

    		// mengambil data dari table pegawai sesuai pencarian data
		$pasien = Pasien::where('nama','like',"%".$cari."%")
		->get();

    		// mengirim data pegawai ke view index
		return view('pages.pasien.index',['pasien' => $pasien]);

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
    public function edit(Pasien $pasien)
    {
        return view('pages.pasien.edit', [
            'pasien' => $pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|int',
            'alamat' => 'required|string',
        ])->validate();

        $pasien->update($validate);
        return redirect()
            ->route('pasien.index')
            ->with('Success', 'Berhasil Update Pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()
        ->route('pasien.index')
        ->with('Success', 'Berhasil Menghapus Data Pasien');
    }
}
