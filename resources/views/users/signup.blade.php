@extends('layouts.auth')

@section('content')
  <section class="section signup-modal">
    <div class="modal-wrapper">
      <div class="modal-content">
        <div class="container w-1024">
          <div class="row form-height">
            <div class="col-xs-12 col-sm-6 section-with-background theme d-flex align-items-center justify-content-center py-5">
              <h3>Welcome aboard Friend,<br>Sign Up to start Preparing</h3>
            </div>
            <div class="col-xs-12 col-sm-6 px-5 signup-form">
              <div class="">
                <legend class="text-center mb-4">Log In With</legend>
                <div class="cta-wrapper d-flex justify-content-center">
                  <a href="#" class="btn btn-facebook mr-3">Facebook</a>
                  <a href="#" class="btn btn-gmail ml-3">Gmail</a>
                </div>
                <legend class="text-center mt-4">Or</legend>
                <p class="text-center">( fill in some details real quick )</p>
                <form action="#" method="post" class="form" role="form">
                  <div class="row">
                    <div class="col-xs-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                      </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" name="lastname" placeholder="Last Name" type="text" required autofocus />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="password" placeholder="New Password" type="password" />
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="reenterpassword" placeholder="Re-enter password" type="password" />
                  </div>
                  <button class="btn btn-primary text-center" type="submit">Sign up</button>
                  <a href="/login" class="text-primary d-block pt-3">Click here to login</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop