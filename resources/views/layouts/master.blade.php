<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>With Better- Pratice better, Be better</title>

  <!-- Import Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,700|Nunito+Sans:300,300i,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
  <!-- Import Main CSS -->
  <link rel="stylesheet" href="{{ dist_asset('app.css') }}">
</head>

<body>
  <div class="container w-1300 page-container">

    {{--  Include Navbar  --}}
    @include('partials.navbar')

    {{--  Include left side bar  --}}
    @include('partials.left-sidebar')
    
    {{--  Include Main content  --}}
    @yield('content')

    {{--  Include Right Side bar  --}}
    @include('partials.right-sidebar')
    
  </div>

    <!-- Require Jquery  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script type="text/javascript" src="{{ dist_asset('app.js') }}"></script>

</body>

</html>
