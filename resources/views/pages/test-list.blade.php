@extends('layouts.master')

@section('left-sidebar')
<!-- Select difficulty level -->
<div class="white-bg p-16">
  <div class="difficulty-level-filter mb-3">
    <p class="section-caption">
      Select difficulty level
    </p>
    <form action="">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value=""> Beginner (60-70%ile)
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value=""> Intermediate (70-80%ile)
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value=""> Advanced (80-90%ile)
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value=""> Expert (90%ile and above)
        </label>
      </div>
    </form>
  </div>

  <!-- No. of attempts filters -->
  <div class="attempts-slider mb-3">
    <p class="section-caption">
      No. of attempts on questions?
    </p>
  </div>

  <!-- Selected Options -->
  <div class="selected-preferences mb-3">
    <p class="section-caption">
      Preferences
    </p>
    <div class="selection-wrapper">
      <div class="selection white-bg shadow-theme">
        <p>CAT</p>
        <span class="close-btn">x</span>
      </div>
    </div>
    <div class="selection-wrapper">
      <div class="selection white-bg shadow-theme">
        <p>Quantitative Aptitude</p>
        <span class="close-btn">x</span>
      </div>
    </div>
    <div class="selection-wrapper">
      <div class="selection white-bg shadow-theme">
        <p>Verbal Reasoning</p>
        <span class="close-btn">x</span>
      </div>
    </div>
    <div class="selection-wrapper">
      <div class="selection white-bg shadow-theme">
        <p>Logical Reasoning</p>
        <span class="close-btn">x</span>
      </div>
    </div>
    <div class="selection-wrapper">
      <div class="selection white-bg shadow-theme">
        <p>English language</p>
        <span class="close-btn">x</span>
      </div>
    </div>
  </div>
</div>  --}}
@endsection

@section('content')
<div class="main-content">
  <div class="preference-menu p-16 white-bg shadow-theme">
    <div class="preference-header">
      <h4 class="section-heading">Your Preferences-</h4>
      <span>Click on any section to add questions from it</span>
    </div>
    <div class="preference-body">
      <div class="cta-wrapper d-flex justify-content-around">
        <a href="/questions" class="btn btn-default btn-wide active">CAT</a>
        <a href="/questions" class="btn btn-default btn-wide">MAT</a>
        <a href="/questions" class="btn btn-default btn-wide">GMAT</a>
        <a href="/questions" class="btn btn-default btn-wide">XAT</a>
        <a href="/questions" class="btn btn-default btn-wide">SAT</a>
      </div>
    </div>
  </div>
  <div class="sample-test-list">
    <h4 class="section-heading mt-3 mb-3">Sample Tests</h4>
    <div class="test-list-container">
      <div class="container no-padding">
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Sample Test</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mock-test-list">
    <h4 class="section-heading mt-3 mb-3">Mock Tests</h4>
    <div class="test-list-container">
      <div class="container no-padding">
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
          <div class="col">
            <a href="/test" class="btn btn-test col">Mock Test</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('right-sidebar')
<div class="leaderboard white-bg p-16 shadow-theme">
  <p class="section-caption">Leaderboard</p>
  <div class="leaderboard-container pt-3">
    <div class="leader d-flex">
      <img src="images/john-doe.png" alt="leader" width="40px" height="40px">
      <div class="leader-data">
        <p class="leader-name">Pawan kumar</p>
        <p class="leader-points">150 points this week</p>
      </div>
    </div>
    <div class="leader d-flex">
      <img src="images/john-doe.png" alt="leader" width="40px" height="40px">
      <div class="leader-data">
        <p class="leader-name">Pawan kumar</p>
        <p class="leader-points">150 points this week</p>
      </div>
    </div>
    <div class="leader d-flex">
      <img src="images/john-doe.png" alt="leader" width="40px" height="40px">
      <div class="leader-data">
        <p class="leader-name">Pawan kumar</p>
        <p class="leader-points">150 points this week</p>
      </div>
    </div>
    <div class="leader d-flex">
      <img src="images/john-doe.png" alt="leader" width="40px" height="40px">
      <div class="leader-data">
        <p class="leader-name">Pawan kumar</p>
        <p class="leader-points">150 points this week</p>
      </div>
    </div>
    <div class="leader d-flex">
      <img src="images/john-doe.png" alt="leader" width="40px" height="40px">
      <div class="leader-data">
        <p class="leader-name">Pawan kumar</p>
        <p class="leader-points">150 points this week</p>
      </div>
    </div>
  </div>
</div>
@endsection