@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-around" style="background-color:#fff; width:100%; margin-top:50px; position:relative; ">
        <div style="background-color:#fff;" >
            <img  class="image-login" src="{{ asset('img/rain.jpg')}}" alt="" style="  padding-top: 50px;   padding-left: 10px; width: 670px;" >
        </div>
        <div class="col align-self-center">
            <div style="text-align:center; padding:10px 0 30px 0;">
                <h1 class="site-title" >Weather Station</h1>
			    <small class="site-description">Internet of Things project</small>
            </div>
            <div class="card" style="margin-bottom:50px;">
            <div class="" style="text-align:center; padding:10px 0 10px 0; margin-bottom:20px;"><h3>{{ __('Login') }} Admin</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <a class="nav-link" href="{{url('/')}}">Back</a> -->
    </div>
</div>
@endsection
