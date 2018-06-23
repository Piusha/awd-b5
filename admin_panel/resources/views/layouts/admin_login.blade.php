<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
   
  </head>
  <body class="login-bg">
  	<div class="header">
      @include('includes.header')
	</div>

	<div class="page-content container">
        @yield('content')
	</div>



  </body>
</html>