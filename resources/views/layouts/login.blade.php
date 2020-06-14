@extends('welcome')
@section('content')
<div class="col-lg-5 col-md-7">
    <div class="card bg-secondary border-0 mb-0">
      <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
          <small>:: Login Akses Aplikasi ::</small>
        </div>

        @error('username')
       <center>
            <strong>{{ $message }}</strong>
       </center>
        @enderror
       <form role="form" action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-group mb-3">
            <div class="input-group input-group-merge input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-email-83"></i>
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

              </span>
              </div>
              <input class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" type="username" value="{{  @old('username') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-merge input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i>
                </span>
              </div>
              <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password">
            </div>
          </div>
          <div class="custom-control custom-control-alternative custom-checkbox">
            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
            <label class="custom-control-label" for=" customCheckLogin">
              <span class="text-muted">Remember me</span>
            </label>
          </div>
          <div class="text-center">
            <button type="submit"  class="btn btn-primary my-4">Sign in</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-6">
        <a href="#" class="text-light"><small>Forgot password?</small></a>
      </div>
      <div class="col-6 text-right">
        <a href="#" class="text-light"><small>Create new account</small></a>
      </div>
    </div>
  </div>

@endsection
