<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kompetensi_keahlian;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        // $response = [
        //     'success' => true,
        //     'data' => $kompetensi_keahlian,
        //     'message' =>'berhasil'
        // ];
        // return response()->json($response, 200);
        return view('backend.guru.index', compact('guru'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kompetensi_keahlian = Kompetensi_keahlian::all();
        $guru = Guru::all();
        return view('backend.guru.create',compact('kompetensi_keahlian','guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru();
        $guru->guru_kode = $request->guru_kode;
        $guru->kompetensi_keahlian_id = $request->kompetensi_keahlian_id;
        $guru->guru_nip = $request->guru_nip;
        $guru->guru_nama = $request->guru_nama;
        $guru->guru_alamat = $request->guru_alamat;
        $guru->guru_tlpn = $request->guru_tlpn;
        $guru->save();

        return redirect()->route('backend.guru.index');
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
        $guru = Guru::findOrFail($id);
        $kompetensi_keahlian = Kompetensi_keahlian::all();
        return view('backend.guru.edit',compact('kompetensi_keahlian','guru'));
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
        $guru = Guru::findOrFail($id);
        $guru->guru_kode = $request->guru_kode;
        $guru->kompetensi_keahlian_id = $request->kompetensi_keahlian_id;
        $guru->guru_nip = $request->guru_nip;
        $guru->guru_nama = $request->guru_nama;
        $guru->guru_alamat = $request->guru_alamat;
        $guru->guru_tlpn = $request->guru_tlpn;
        $guru->save();

        return redirect()->route('backend.guru.index');
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
