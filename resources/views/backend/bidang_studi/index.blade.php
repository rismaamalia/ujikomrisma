@extends('layouts.app')
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Bidang Studi</div>
                <div class="card-body">
                <br>
                    <center> <a href="{{ route('bidang_studi.create') }}"
                    class="btn btn-primary">Tambah</a>
                    </center>
                <br>

                <div class="table-responsive">
                     <table class="table">
                       <tr>
                           <th>No</th>
                           <th>Kode Bidang</th>
                           <th>Nama Bidang</th>

                           <th colspan="3">Aksi</th>
                       </tr>
                       @php $no =1; @endphp
                       @foreach ($bidang_studi as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->bidang_kode }}</td>
                            <td>{{ $data->bidang_nama }}</td>
    
                            
                            <td>
                                <a href="{{ route('bidang_studi.edit',$data->id) }}" class="btn btn-sm btn-success">
                                            Edit </a>
                            </td>
                            
                            <td>
                                <a href="{{ route('bidang_studi.show',$data->id) }}" class="btn btn-sm btn-warning">
                                            Detail </a>
                            </td>        
                            
                            <td>
                                <form action="{{ route('bidang_studi.destroy',$data->id) }}" method="post">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm btn-danger" type="submit">Hapus
        
                                        </button>
                                </form>
                            </td>
                        </tr>                      
                        @endforeach
                    </table>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection