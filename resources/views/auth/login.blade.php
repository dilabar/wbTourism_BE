@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Login form</h2>
            <br>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                    
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{ old('password') }}">
                   
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                    <div class="captcha">
                        <span>{!! captcha_img('flat') !!}</span>
                        <button class="btn  btn-refresh" type="button" onclick="refreshCaptcha()"><img src="{{ asset('assets/img/refresh.png') }}" width="24" alt=""></button>

                    </div>
                   
                    <input id="captcha" type="text" class="form-control" name="captcha" value="{{ old('captcha') }}" placeholder="Enter captcha" autocomplete="off"  autofocus>
                    @if ($errors->has('captcha'))
                    <span class="help-block">
                        <strong>{{ $errors->first('captcha') }}</strong>
                    </span>
                    @endif

                </div>
                <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
                <br>
                <br>

            </form>
        </div>
    <div>
        <script>
            function refreshCaptcha(){
                alert("ccc")
                $.ajax({
        
                type:'GET',
        
                url:'/refresh_captcha',
        
                success:function(data){
        
                    $(".captcha span").html(data.captcha);
        
                }
        
                });
        
                };
        </script>
@endsection
@section('script')
{{-- refreshCaptcha --}}

@endsection