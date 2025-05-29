@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="POST" action="{{ url('login/siswa/proses') }}">
    @csrf
    <h3>Login Siswa</h3>

    <label for="nisn">NISN</label>
    <input type="text" id="nisn" name="nisn" class="@error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" required autofocus placeholder="Masukkan NISN">
    @error('nisn')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="nama_siswa">Nama Lengkap</label>
    <input type="text" id="nama_siswa" name="nama_siswa" class="@error('nama_siswa') is-invalid @enderror" value="{{ old('nama_siswa') }}" required placeholder="Masukkan Nama Lengkap">
    @error('nama_siswa')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit">Login</button>

    <div class="alert">
        Login untuk <b>petugas</b> silahkan <a href="{{ url('login') }}" class="text-primary">Klik Disini</a>
    </div>
</form>
@endsection