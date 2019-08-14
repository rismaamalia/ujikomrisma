@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kompetensi Keahlian</div>

                <div class="card-body">
                <form action="{{ route('backend.kompetensi-keahlian.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Kompetensi</label>
                    <input class="form-control" type="text" name="kompetensi_kode" required>
                </div>

                <div class="form-group">
                        <label for="">Kode Bidang</label>
                        <select name="bidang_studi_id" class="form-control">
                            @foreach($bidang_studi as $data)
                            <option value="{{ $data->id }}">{{ $data->bidang_nama }}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="form-group">
                    <label for="">Nama Kompetensi</label>
                    <input class="form-control" type="text" name="kompetensi_nama" required>
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