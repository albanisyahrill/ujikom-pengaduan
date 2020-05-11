@extends('adminlte::page')

@section('title', 'Pengaduan')

@section('content_header')
        <h1 class="m-0 text-dark">Buat Pengaduan</h1>
@stop

@section("content")
<div class="col-md-8">
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('pengaduans.store')}}" method="POST">
        @csrf
        <label for="tgl_pengaduan">Tanggal Pengaduan</label>
        <input class="form-control" placeholder="Tanggal Pengaduan" type="date" name="tgl_pengaduan" id="tgl_pengaduan" />
        <br>
        <label for="isi_laporan">Isi Laporan</label>
        <input class="form-control" placeholder="Isi Laporan" type="text" name="isi_laporan" id="isi_laporan" />
        <br>
        <label for="foto">Foto</label>
        <input id="foto" name="foto" type="file" class="form-control"/>
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        </form>
        </div>
@stop