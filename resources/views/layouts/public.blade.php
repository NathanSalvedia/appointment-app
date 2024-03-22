<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >

    <link rel="icons" href="{{ asset('img/logo1.png')}}" />
    <link rel="manifest" href="{{ asset('manifest.webmanifest')}}" />

    <title>@yield('title', 'Appointment App')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
</head>


<body>






    <script src="{{ asset('js/bootstrap.min.js')}}"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    function showSweetAlert() {
        swal("Good job!", "Your request has been successfully sent!", "success").then((value) => {
            if (value) {
                window.location.href = "{{ route('user.status') }}"; // Redirect to status page
            }
        });
    }

    function SweetAlert() {
        swal("Good job!", "Appointment has been Created", "success").then((value) => {
            if (value) {
                window.location.href = "{{ route('admin.admin-mainpage') }}"; // Redirect to status page
            }
        });
    }

    document.getElementById('saveButton').addEventListener('click', function(event) {
        event.preventDefault();
        swal("Success!", "Your request has been saved!", "success")
        .then((value) => {
            window.location.href = "{{ route('user.status') }}"; // Redirect to status page
        });
    });

</script>
</body>
</html>
