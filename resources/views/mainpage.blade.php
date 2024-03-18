@extends('layouts.main')

@section('title', 'Appointment App | MainPage')

@section('content')

<div class="container-fluid section-main p-5">
    <div class="main">
      <div class="text-center">
        <h1 class="display-1 p-5 m-5 text-white">"By Scheduling an appointment you're taking"</h1>
      </div>
      <p class="h1 text-center my-5 pt-5 text-white">
        A steps towards making your dreams a Reality
       </p>

       <div class="main-btn text-center">
        <a class="btn btn--form" href="request.html" role="button">Request now!!</a>
        <!--<button href="#appointment.html" class="btn btn--form">Request now!!</button>-->
      </div>
    </div>

    <footer class="footer">
      <div class="info-col">
        <p class="footer-heading">Contact Us:</p>
          <address class="contacts">
             <p>
              <a href="#">
                <img class="icons" alt="" src="img/icon2.png" />
               </a>
              <a class="footer-link p-4" href="tel:+63 1234 567 89">+63 1234 567 89</a
                ><br />

                <a href="#">
                  <img class="icons" alt="" src="img/icon1.png" />
                 </a>
                <a class="footer-link" href="mailto:spc.edu.ph@gmail.com"
                >spc.edu.ph@gmail.com</a

            </p>
          </address>
        </ul>
      </div>
    </footer>
  </div>

@endsection
