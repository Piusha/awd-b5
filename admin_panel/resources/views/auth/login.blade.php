@extends('layouts.admin_login')

@section('content')

<div class="row">   
    <div class="col-md-4 col-md-offset-4">
        <div class="login-wrapper">
            <div class="box">
                <div class="content-wrap">
                    <h6>Sign In</h6>
                    <form class="form-horizontal" id="login" method="POST" action="/api/users/login">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                               
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="already">
                <p>Don't have an account yet?</p>
                <a href="signup.html">Sign Up</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/entry.js') }}"></script>
@endsection
