@extends('layouts.example')

<<main class="py-5 mt-5 ">
    <div class="container pt-5 my-5 ">
        <h1 class="h2 mb-3">
            Welcome
            <small class="text-muted">Kent Zorel</small>
        </h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body pt-5">
                        <p class="mb-0  h2 pt-3"><strong>Thanks for signing up!</strong> Before getting started, please
                            verify your email address by clicking on the link we just emailed to you.</p></p>
                         <p class="mb-0 h2 pt-2">If you didn't receve the email, we will gladly send you another.</p>

                        <form class="pt-5">
                            <button class="btn btn-dark btn-lg mt-3 ">Resend email verification</button>
                            <a class="btn btn-dark mt-3 btn-lg" href='{{ route('mainpage')}}' role="button">Proceed</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
