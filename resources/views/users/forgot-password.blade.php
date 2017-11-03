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
              <legend class="text-center mt-4">Forgot Password</legend>
              <form action="#" method="post" class="form" role="form">
                <div class="row">
                  <div class="col-xs-6 col-md-12">
                    <div class="form-group">
                      <input class="form-control" name="email" placeholder="Enter your email" type="email" required autofocus />
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Recover Password</button>
                <a href="/login" class="text-primary d-block pt-3">Log In</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop