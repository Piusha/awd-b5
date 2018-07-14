@extends('layouts.admin_login')

@section('content')


	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign Up</h6>
							<form action="/api/users" method="POST" id="entry">
								<input class="form-control" type="text" 
								placeholder="Name" name="name"/>
								<input class="form-control" type="text" placeholder="E-mail address" name="email">
								<input class="form-control" type="password" placeholder="Password" name="password">
								<input class="form-control" type="password" placeholder="Confirm Password" name="conf_pass">
								<div class="action">
									<button type="submit" class="btn btn-primary signup">Sign Up</button>
								</div>
							</form>               
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

@section('js')
<script src="{{ asset('js/entry.js') }}"></script>
@endsection
