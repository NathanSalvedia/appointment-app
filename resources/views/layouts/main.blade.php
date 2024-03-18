<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >


    <title>@yield('title', 'Appointment App')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




</head>
<body>


    <header class="header">
        <a href="#">
         <img class="logo" alt="" src="img/logo.png" />
        </a>

        <nav class="main-nav">
         <ul class="main-nav-list">
           <li><a class="main-nav-link nav-cta" href='{{ route('user.status')}}'>Appointment</a></li>
           <li><a class="main-nav-link" href='{{ route('user.settings')}}'>Settings</a></li>
           <li><a class="main-nav-link" href='{{ route('user.logout')}}'>Logout</a></li>
         </ul>
       </nav>
      </header>

      @yield('content')



    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
