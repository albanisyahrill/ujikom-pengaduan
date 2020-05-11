@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
        <h1 class="m-0 text-dark">Create New User</h1>
@stop

@section("content")
<div class="col-md-8">
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input class="form-control" placeholder="nama panjang" type="text" name="nama" id="nama" />
        <br>
        <label for="username">Username</label>
        <input class="form-control" placeholder="username" type="text" name="username" id="username" />
        <br>
        <label for="">Level</label>
        <br>
        <input type="checkbox" name="level[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Admin</label>
        <input type="checkbox" name="level[]" id="PETUGAS" value="PETUGAS">
        <label for="PETUGAS">Petugas</label>
        <br>
        <br>
        <label for="telpon">No Telpon</label>
        <input class="form-control" placeholder="no telpon" type="text" name="telpon" id="telpon" />
        <br>
        <label for="email">Email</label>
        <input class="form-control" placeholder="user@mail.com" type="text" name="email" id="email" />
        <br>
        <label for="password">Password</label>
        <input class="form-control" placeholder="password" type="password" name="password" id="password" />
        <br>
        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control" placeholder="password confirmation" type="password" name="password_confirmation"
            id="password_confirmation" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        </form>
        </div>
@stop