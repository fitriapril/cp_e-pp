
@extends('layouts.app')

@section('content')

<body>
  <form method="POST" action="{{ route('login') }}">
    @csrf
      <h3>Login Here</h3>

      <label for="email">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        @error('email')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

      <label for="password">Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

      <button>Log In</button>
      <div class="alert">
        Login untuk <b>siswa</b> silahkan <a href="{{ url('login/siswa') }}" class="text-primary" style="text-decoration:none; ">Klik Disini</a>
    </div>
  </form>
</body>
@endsection
