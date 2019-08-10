<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidang_studi;

class Bidang_studiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $bidang_studi = Bidang_studi::all();
     $response = [
        'success' => true,
        'data' => $bidang_studi,
        'message' =>'berhasil'
    ];
    return response()->json($response, 200);
    return view('backend.bidang_studi.index', compact('bidang_studi'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bidang_studi.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidang_studi = new Bidang_Studi();
        $bidang_studi->bidang_kode = $request->bidang_kode;
        $bidang_studi->bidang_nama = $request->bidang_nama;
        $bidang_studi->save();

        $response = [
                'success' => true,
                'data' => $bidang_studi,
                'message' =>'Bidang Studi berhasil ditambahkan'
            ];
           return response()->json($response, 200);
           return view('backend.bidang_studi.index', compact('bidang_studi'));
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
        $bidang_studi = Bidang_studi::findOrFail($id);
        return view('backend.bidang_studi.edit',compact('bidang_studi'));
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
        $bidang_studi = Bidang_studi::find($id);
        $bidang_studi->bidang_kode = $request->bidang_kode;
        $bidang_studi->bidang_nama = $request->bidang_nama;
        $bidang_studi->save();

        $response = [
                'success' => true,
                'data' => $bidang_studi,
                'message' =>'Bidang Studi berhasil ditambahkan'
            ];
           return response()->json($response, 200);
           return view('backend.bidang_studi.index', compact('bidang_studi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidang_studi = Bidang_studi::find($id);
        $bidang_studi->delete();
         $response = [
                'success' => true,
                'data' => $kategori,
                'message' =>'kategori berhasil dihapus'
            ];
            return response()->json($response, 200);
             return redirect()->route('backend.bidang_studi.indebackend.bidang_studi.inde');
    }
}
