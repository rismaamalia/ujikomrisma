@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Bidang Studi Baru</div>

                <div class="card-body">
                <form action="{{ route('bidang_studi.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Bidang</label>
                    <input class="form-control" type="text" name="bidan_kode" required>
                </div>

                <div class="form-group">
                    <label for="">Nama Bidang</label>
                    <input class="form-control" type="text" name="bidang_nama" required>
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