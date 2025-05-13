<nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container-fluid">
                <img class="logo" alt="SPC logo" src="images/logo.png"/>
            <div class=" navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto main-nav-list">
                    <li><a class="nav-item main-nav-link" href="{{ route('status')}}">Appointment</a></li>
                    <li><a class="nav-item main-nav-link " href="{{ route('user.settings')}}">Settings</a></li>
                    <li><a class="nav-item main-nav-link " href="{{ route('logout') }}">Logout</a></li>
                  </ul>
            </div>
        </div>
    </nav>

    <style>
              .nav-item {
                font-weight: bold;
                font-family: Arial, Helvetica, sans-serif;
              }
             </style>