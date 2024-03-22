<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >


    <link rel="icon" href="{{ asset('img/logo1.png')}}" />
    <link rel="manifest" href="{{ asset('manifest.webmanifest')}}" />

    <title>@yield('title', 'Appointment App')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand pl-5">
                <img class="logo" alt="SPC logo" src="img/logo.png" width="170"/>
            </a>
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto main-nav-list">
                    <li><a class="nav-item main-nav-link nav-cta" href='{{ route('user.status')}}'>Appointment</a></li>
                    <li><a class="nav-item main-nav-link" href='{{ route('user.settings')}}'>Settings</a></li>
                    <li><a class="nav-item main-nav-link" href="#" id="loginLink">Logout</a></li>
                  </ul>
            </div>
        </div>
    </nav>

      @yield('content')



    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.getElementById("loginLink").addEventListener("click", function(event) {
        event.preventDefault();
        swal("Are you sure you want to Logout?", {
            buttons: ["Cancel", true],
        }).then((value) => {
            if (value) {
                window.location.href = "{{ route('login') }}";
            }
        });
    });
</script>
</body>
</html>
