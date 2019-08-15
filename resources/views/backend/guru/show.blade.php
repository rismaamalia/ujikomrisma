@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kompetensi Keahlian</div>

                <div class="card-body">
                    <form action="{{ route('backend.kompetensi-keahlian.update', $kompetensi_keahlian->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Kompetensi</label>
                    <input class="form-control" type="text" value="{{ $kompetensi_keahlian->kompetensi_kode }}" name="kompetensi_kode" disabled>
                </div>

                <div class="form-group">
                    <label for="">Kode Bidang</label>
                    <input name="bidang_studi_id" name="bidang_studi_id" class="form-control" value="{{ $kompetensi_keahlian->bidang_studi_id)}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Nama Kompetensi</label>
                    <input class="form-control" type="text" value="{{ $kompetensi_keahlian->kompetensi_nama }}" name="kompetensi_nama" disabled>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Simpan Data
                    </button>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection