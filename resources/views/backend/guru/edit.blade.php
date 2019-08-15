@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Guru</div>

                <div class="card-body">
                    <form action="{{ route('backend.guru.update', $guru->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Guru</label>
                <input class="form-control" type="text" value="{{ $guru->guru_kode}}" name="guru_kode" required>
                </div>

                <div class="form-group">
                    <label for="">Kode kompetensi keahlian</label>
                    <select name="kompetensi_keahlian_id" class="form-control">
                        @foreach($kompetensi_keahlian as $data)
                        <option value="{{ $data->id }}" {{ ($data->id == $guru->kompetensi_keahlian_id) ? 'selected' : ''}}>{{ $data->kompetensi_nama }}</option>
                        @endforeach
                    </select>
                </div>
                
                 <div class="form-group">
                    <label for="">Nip Guru</label>
                    <input class="form-control" type="text" name="guru_nip" value="{{ $guru->guru_nip}}" required>
                </div>

                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input class="form-control" type="text" name="guru_nama" value="{{ $guru->guru_nama}}" required>
                </div>

                <div class="form-group">
                    <label for="">Alamat Guru</label>
                    <textarea class="form-control" name="guru_alamat" id="" cols="20" rows="10">{{ $guru->guru_alamat}}</textarea>
                </div>
                

                <div class="form-group">
                    <label for="">Telephone Guru</label>
                    <input class="form-control" type="text" name="guru_tlpn" value="{{ $guru->guru_tlpn}}" required>
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