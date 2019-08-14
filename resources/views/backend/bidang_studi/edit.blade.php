@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Bidang Studi</div>

                <div class="card-body">
                    <form action="{{ route('backend.bidang-studi.update', $bidang_studi->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kode Bidang</label>
                    <input class="form-control" type="text" value="{{ $bidang_studi->bidang_kode }}" name="bidang_kode" required>
                </div>

                <div class="form-group">
                    <label for="">Nama Bidang</label>
                    <input class="form-control" type="text" value="{{ $bidang_studi->bidang_nama }}" name="bidang_nama" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                            Update
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