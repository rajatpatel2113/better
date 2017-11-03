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
              <legend class="text-center mt-4">Log In</legend>
              <div class="cta-wrapper d-flex justify-content-center pb-4">
                <a href="#" class="btn btn-facebook mr-3">Facebook</a>
                <a href="#" class="btn btn-gmail ml-3">Gmail</a>
              </div>
              <form action="#" method="post" class="form" role="form">
                <div class="row">
                  <div class="col-xs-6 col-md-12">
                    <div class="form-group">
                      <input class="form-control" name="email" placeholder="Email" type="email" required autofocus />
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-12">
                    <div class="form-group">
                      <input class="form-control" name="password" placeholder="Last Name" type="password" required autofocus />
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Log In</button>
                <a href="/forgot-password" class="text-primary d-block pt-3">Forgot password?</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop