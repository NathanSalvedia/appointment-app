@extends('layouts.public')

@section('title', 'Appointment App | Request ')



<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card-sidebar">
             <div class="pt-3 mb-3">
                <div class="mb-5 pt-5 pl-3">
                    <img src="{{ asset('img/logo7.png')}}" alt="Profile Picture">
                 </div>
             </div>
              <div class="mb-5 pl-3 text-white">
                 <p class="cta-text" > Hi, {{  Auth::user()->firstname }}!</p>
              </div>

             <div class="nav">
              <ul class="list-unstyled">
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.settings')}}">Settings</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}">Logout</a></li>
              </ul>
             </div>
        </div>
       </div>

       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4 pt-5 text-center ">
                    <p class="h2">Inbox</p>
                </div>
                <div class="container mt-5">
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">From</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-toggle="modal" data-target="#emailModal1">
                          <td>john.doe@example.com</td>
                          <td>Meeting Reminder</td>
                          <td>Pending</td>
                          <td>2024-05-31</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#emailModal2">
                          <td>jane.smith@example.com</td>
                          <td>Project Update</td>
                          <td>Pending</td>
                          <td>2024-05-30</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#emailModal3">
                          <td>news@example.com</td>
                          <td>Newsletter - May Edition</td>
                          <td>Pending </td>
                          <td>2024-05-29</td>
                        </tr>
                        <!-- Add more rows as needed -->
                      </tbody>
                    </table>
                  </div>

                  <!-- Modals -->
                  <div class="modal-dialog modal-lg"></div>
                  <div class="modal fade" id="emailModal1" tabindex="-1" aria-labelledby="emailModal1Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="emailModal1Label">Meeting Reminder</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Dear John,
                          <br><br>
                          This is a reminder for our meeting scheduled tomorrow at 10 AM.
                          <br><br>
                          Best regards,<br>
                          Your Team
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="emailModal2" tabindex="-1" aria-labelledby="emailModal2Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="emailModal2Label">Project Update</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Hi Jane,
                          <br><br>
                          Here is the latest update on the project. We have completed the initial phase and are moving to the next step.
                          <br><br>
                          Regards,<br>
                          The Project Team
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="emailModal3" tabindex="-1" aria-labelledby="emailModal3Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="emailModal3Label">Newsletter - May Edition</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Welcome to the May edition of our newsletter. This month, we cover the latest trends in the industry.
                          <br><br>
                          Stay tuned for more updates.
                          <br><br>
                          Best,<br>
                          The Newsletter Team
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
</div>




