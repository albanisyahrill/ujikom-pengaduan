@extends('adminlte::page')

@section('title', 'Pengaduan')

@section('content_header')
<h1 class="m-0 text-dark">Daftar Laporan</h1>
@stop

@section('content')
<div class="row">
</div>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Tanggal Pengaduan</b></th>
            <th><b>Isi Laporan</b></th>
            <th><b>Foto</b></th>
            <th><b>Aksi</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduans as $pengaduan)
        <tr>
            <td>{{$pengaduan->tgl_pengaduan}}</td>
            <td>{{$pengaduan->isi_laporan}}</td>
            <td>
                 @if($pengaduan->foto)
                <img src="{{asset('storage/'.$pengaduan->foto)}}" width="70px" />
                @else
                N/A
                @endif
            </td>
            <td>
                <a class="btn btn-info text-white btn-sm" href="{{route('pengaduans.edit', [$pengaduan->id])}}">Beri Tanggapan</a>
            </td>
        </tr>
        @endforeach
    </tbody>
     <tfoot>
         <tr>
             <td colspan=10>
                {{$pengaduans->appends(Request::all())->links()}}
            </td>
        </tr>
    </tfoot>
</table>
@endsection
