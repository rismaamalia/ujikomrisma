@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Guru</div>

                <div class="card-body">
                <form action="{{ route('backend.guru.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Guru</label>
                    <input class="form-control" type="text" name="guru_kode" required>
                </div>

                <div class="form-group">
                        <label for="">Kode Kompetensi</label>
                        <select name="kompetensi_keahlian_id" class="form-control">
                            @foreach($kompetensi_keahlian as $data)
                            <option value="{{ $data->id }}">{{ $data->kompetensi_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                
                 <div class="form-group">
                    <label for="">Nip Guru</label>
                    <input class="form-control" type="text" name="guru_nip" required>
                </div>

                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input class="form-control" type="text" name="guru_nama" required>
                </div>

                <div class="form-group">
                    <label for="">Alamat Guru</label>
                    <textarea class="form-control" name="guru_alamat" id="" cols="20" rows="10"></textarea>
                </div>
                

                <div class="form-group">
                    <label for="">Telephone Guru</label>
                    <input class="form-control" type="text" name="guru_tlpn" required>
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