@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Bidang Studi</div>

               

                <div class="form-group">
                    <label for="">Kode Bidang</label>
                    <input class="form-control" type="text" value="{{ $bidang_studi->bidang_kode }}" name="bidang_kode" disabled>
                </div>

                <div class="form-group">
                    <label for="">Nama Bidang</label>
                    <input class="form-control" type="text" value="{{ $bidang_studi->bidang_nama }}" name="bidang_nama" disabled>
                </div>


                <div class="form-group">
                        <a href="{{ route('backend.bidang-studi.index') }}" class="btn btn-outline-info">
                            Kembali
                        </a>
    
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection