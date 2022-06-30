<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">     
      </div>
      <script type="text/javascript">
            window.touchStone = {!! json_encode([
                  'baseUrl'   => url('/'),
                  'routes'    => collect(\Route::getRoutes())->mapWithKeys(function ($route) { return [$route->getName() => $route->uri()]; })
            ]) !!};
      </script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>