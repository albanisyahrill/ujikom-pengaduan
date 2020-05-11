@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<h1 class="m-0 text-dark">Detail</h1>
@stop
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <b>Nama:</b> <br>
            {{$user->nama}}
            <br>
            <br>
            <b>Username:</b><br>
            {{$user->username}}
            <br>
            <br>
            <b>Email:</b><br>
            {{$user->email}}
            <br>
            <br>
            <b>No Telpon</b> <br>
            {{$user->telpon}}
            <br><br>
            <b>Level</b> <br>
             {{$user->level}}
            <br>
            <br>
        </div>
    </div>
</div>

@endsection
