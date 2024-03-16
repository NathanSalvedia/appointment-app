<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >


    <title></title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 </head>


  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand pl-5">
            <img class="logo" alt="SPC logo" src="img/logo.png" width="170"/>
        </a>
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <ul class="navbar-nav ml-auto main-nav-list">
                <li><a class="nav-item main-nav-link nav-cta" href="appointment-status.html">Appointment</a></li>
                <li><a class="nav-item main-nav-link" href="profile.html">Settings</a></li>
                <li><a class="nav-item main-nav-link" href="logout.html">Logout</a></li>
              </ul>
        </div>
    </div>
 </nav>

       @yield('content')


     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>