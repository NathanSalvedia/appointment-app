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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>






    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

    document.getElementById('signupForm').addEventListener('submit', function(event) {
        event.preventDefault();
        setTimeout(function() {
            swal({
                title: "Success!",
                text: "You have successfully registered!",
                icon: "success",
                button: "OK",
            }).then(function() {
                window.location.href = "{{ route('mainpage') }}"; // Redirect to dashboard
            });
        }, 1000);
    });
</script>
</body>
</html>
