@extends('adminlte::page')

@section('title', 'Pengaduan')

@section('content_header')
<h1 class="m-0 text-dark">Beri Tanggapan</h1>
@stop

@section('content')

<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('tanggapans.update', [$tanggapan->id])}}"
        method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="tanggapan">Tanggapan</label>
        <input class="form-control placeholder=" type="text"
            name="tanggapan" id="tanggapan" />
        <input class="btn btn-primary" type="submit" value="Simpan" />
    </form>
</div>
@endsection