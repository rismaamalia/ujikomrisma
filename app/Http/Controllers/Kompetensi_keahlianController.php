<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kompetensi_keahlian;
use App\Bidang_studi;

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
        // $response = [
        //     'success' => true,
        //     'data' => $kompetensi_keahlian,
        //     'message' =>'berhasil'
        // ];
        // return response()->json($response, 200);
        return view('backend.kompetensi_keahlian.index', compact('kompetensi_keahlian'));   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kompetensi_keahlian = Kompetensi_keahlian::all();
        $bidang_studi = Bidang_studi::all();
        return view('backend.kompetensi_keahlian.create',compact('kompetensi_keahlian','bidang_studi')); 
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
        $kompetensi_keahlian->kompetensi_kode = $request->kompetensi_kode;
        $kompetensi_keahlian->bidang_studi_id = $request->bidang_studi_id;
        $kompetensi_keahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensi_keahlian->save();

        // $response = [
        //         'success' => true,
        //         'data' => $kompetensi_keahlian,
        //         'message' =>'Bidang Studi berhasil ditambahkan'
        //     ];
        //    return response()->json($response, 200);
        return redirect()->route('backend.kompetensi-keahlian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kompetensi_keahlian = Kompetensi_keahlian::findOrFail($id);
        $bidang_studi = Bidang_studi::all();
        return view('backend.kompetensi_keahlian.show',compact('kompetensi_keahlian','bidang_studi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kompetensi_keahlian = Kompetensi_keahlian::findOrFail($id);
        $bidang_studi = Bidang_studi::all();
        return view('backend.kompetensi_keahlian.edit',compact('kompetensi_keahlian','bidang_studi'));
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
        $kompetensi_keahlian = Kompetensi_keahlian::findOrFail($id);
        $kompetensi_keahlian->kompetensi_kode = $request->kompetensi_kode;
        $kompetensi_keahlian->bidang_studi_id = $request->bidang_studi_id;
        $kompetensi_keahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensi_keahlian->save();

        // $response = [
        //         'success' => true,
        //         'data' => $kompetensi_keahlian,
        //         'message' =>'Bidang Studi berhasil ditambahkan'
        //     ];
        //    return response()->json($response, 200);
        return redirect()->route('backend.kompetensi-keahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kompetensi_keahlian = Kompetensi_keahlian::findorFail($id)->delete();
        // Session::flash("flash_notification",[
        //     "level" => "success",
        //     "message" =>"DATA BERHASIL DI HAPUS"
        // ]);
        return redirect()->route('backend.kompetensi-keahlian.index');
    }
}
