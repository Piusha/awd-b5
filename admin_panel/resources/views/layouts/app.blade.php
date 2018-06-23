<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/glyphicons/styles/glyphicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  </head>
  <body class="login-bg">
  	<div class="header">
      @include('includes.header')
	</div>

	<div class="page-content">
        <div class="row">
            <div class="col-md-2">
                @include('includes.sidenav')
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>

        </div>
        
	</div>


    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>