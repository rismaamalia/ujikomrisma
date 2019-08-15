@extends('layouts.app')
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Guru</div>
                <div class="card-body">
                <br>
                    <center> <a href="{{ route('backend.guru.create') }}"
                        class="btn btn-outline-primary">Tambah</a>
                    </center>
                <br>

                <div class="table-responsive">
                     <table class="table table-striped">
                         <thead class="thead-danger">
                       <tr>
                           <th>No</th>
                           <th>Kode Guru</th>
                           <th>Kode Kompetensi Keahlian</th>
                           <th>Nip</th>
                           <th>Nama</th>
                           <th>Alamat</th>
                           <th>Telp</th>

                           <th colspan="3">Aksi</th>
                       </tr>
                       @php $no =1; @endphp
                       @foreach ($guru as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->guru_kode}}</td>
                            <td>{{ $data->kompetensi_keahlian->kompetensi_kode }}</td>
                            <td>{{ $data->guru_nip }}</td>
                            <td>{{ $data->guru_nama }}</td>
                            <td>{{ $data->guru_alamat }}</td>
                            <td>{{ $data->guru_tlpn }}</td>
    
                            
                            <td>
                                <a href="{{ route('backend.guru.edit',$data->id) }}" class="btn btn-outline-success">
                                            Edit </a>
                            </td>
                            
                            <td>
                                <a href="{{ route('backend.guru.show',$data->id) }}" class="btn btn-outline-info">
                                            Detail </a>
                            </td>        
                            
                            <td>
                                <form action="{{ route('backend.guru.destroy',$data->id) }}" method="post">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-outline-danger" type="submit">Hapus
        
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