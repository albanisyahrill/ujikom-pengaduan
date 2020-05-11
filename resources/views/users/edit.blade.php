@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<h1 class="m-0 text-dark">Edit User</h1>
@stop

@section('content')

<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', [$user->id])}}"
        method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="nama">Nama</label>
        <input value="{{old('nama') ? old('nama') : $user->nama}}"
            class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" placeholder="Nama Panjang" type="text"
            name="nama" id="nama" />
        <div class="invalid-feedback">
            {{$errors->first('nama')}}
        </div>
        <br>

        <label for="username">Username</label>
        <input value="{{$user->username}}" class="form-control" placeholder="username" type="text"
            name="username" id="username" />
        <br>
        <label for="">Level</label>
        <br>
        <input type="checkbox" name="level[]" id="admin" value="admin" {{$user->level == 'admin' ? "checked" : ""}} name="level[]" class="{{$errors->first('level') ? "is-invalid" : "" }}"> 
        <label for="ADMIN">Admin</label>
        <input type="checkbox" name="level[]" id="petugas" value="petugas" {{$user->level == 'petugas' ? "checked" : ""}} name="level[]" class="{{$errors->first('level') ? "is-invalid" : "" }}">
        <label for="PETUGAS">Petugas</label>
        <br><br>
        <label for="telpon">No Telpon</label>
        <br>
        <input type="text" name="telpon" class="form-control {{$errors->first('telpon') ? "is-invalid" : ""}}" value="{{old('telpon') ?
old('telpon') : $user->telpon}}">
        <div class="invalid-feedback">
            {{$errors->first('telpon')}}
        </div>
        <br>
        <label for="email">Email</label>
        <input value="{{$user->email}}" disabled class="form-control
{{$errors->first('email') ? "is-invalid" : ""}} " placeholder="user@mail.com" type="text" name="email" id="email" />
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Simpan" />
    </form>
</div>
@endsection
