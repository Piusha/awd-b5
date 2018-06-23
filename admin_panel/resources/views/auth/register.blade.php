@extends('layouts.admin_login')

@section('content')


	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign Up</h6>
			                <input class="form-control" type="text" placeholder="E-mail address">
			                <input class="form-control" type="password" placeholder="Password">
			                <input class="form-control" type="password" placeholder="Confirm Password">
			                <div class="action">
			                    <a class="btn btn-primary signup" href="index.html">Sign Up</a>
			                </div>                
			            </div>
			        </div>

			        <div class="already">
			            <p>Have an account already?</p>
			            <a href="login.html">Login</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>

@endsection
