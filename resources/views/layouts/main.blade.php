<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >


    <title>@yield('title', 'Appointment App')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link  href="{{ asset('css/bootstrap.css')}}"  rel="stylesheet"/>
    <link  href="{{ asset('css/style.css')}}"  rel="stylesheet"/>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand pl-5">
                <img class="logo" alt="" src="img/logo.png" width="160"/>
            </a>
                <ul class="nav main-nav-list justify-content-end mx-5">
                    <li><a class="nav-item main-nav-link nav-cta" href="">Appointment</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle nav-item main-nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Kent Zorel
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item nav-item main-nav-link" href="settings.html">Settings</a>
                        <a class="dropdown-item nav-item main-nav-link" href="logout.html">Logout</a>
                    </div>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>

    @yield('content')




   <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
