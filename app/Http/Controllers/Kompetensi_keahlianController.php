<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kompetensi_keahlian;

class Kompetensi_keahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensi_keahlian = Kompetensi_keahlian::all();
        $response = [
            'success' => true,
            'data' => $kompetensi_keahlian,
            'message' =>'berhasil'
        ];
        return response()->json($response, 200);
        return view('backend.kompetensi_keahlian.index', compact('kompetensi_keahlian'));   
        
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
        $kompetensi_keahlian = new Kompetensi_keahlian();
        $kompetensi_keahlian->bidang_kode = $request->bidang_kode;
        $kompetensi_keahlian->bidang_nama = $request->bidang_nama;
        $kompetensi_keahlian->save();

        $response = [
                'success' => true,
                'data' => $kompetensi_keahlian,
                'message' =>'Bidang Studi berhasil ditambahkan'
            ];
           return response()->json($response, 200);
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
        //
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
