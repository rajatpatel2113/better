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
    <div id="slidecontainer">
      <span class="sliderange">
        <input type="range" min="1" max="1000" value="500" class="slider" id="myRange">
         <div class="range-map">
          <p>Min:1</p>
          <p>Max: <span id="output"></span></p>
         </div>
      </span>
    </div>
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
</div>
@endsection

@section('content')
<div class="main-content">
  <div class="getting-started-dialog p-16 white-bg mb-3 shadow-theme">
    <span class="close-icon">x</span>
    <h4 class="section-heading mb-3">Here’s how you can get started</h4>
    <div class="col-sm-8 no-padding">
      <p>It’s easy! Just select the exam your are preparing for and you will get the questions to solve. You can also filter
        the results if you want to solve questions of a partical subject or even a particular chapter. </p>
      <button class=" btn btn-primary">I get it!</button>
    </div>
  </div>
  <div class="preference-menu p-16 white-bg shadow-theme">
    <span class="toggle-icon toggle-preference">▾</span>
    <div class="preference-menu-default">
      <div class="preference-header">
        <h4 class="section-heading">Your Preferences-</h4>
        <span>Click on any section to add questions from it</span>
      </div>
      <div class="preference-body">
        <div class="cta-wrapper d-flex justify-content-around exam-name">
          <a href="#" class="btn btn-default btn-wide active">CAT</a>
          <a href="#" class="btn btn-default btn-wide">MAT</a>
          <a href="#" class="btn btn-default btn-wide">GMAT</a>
          <a href="#" class="btn btn-default btn-wide">XAT</a>
          <a href="#" class="btn btn-default btn-wide">SAT</a>
        </div>
      </div>
    </div>
    <div class="preference-menu-expanded pt-3">
      <h5 class="section-heading">Select Section</h5>
      <div class="exam-section-container">
        <form action="" class="">
          <div class="form-check form-check-inline col-sm-3 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              Quantitative Aptitude
              <a href="#" class="caption-link">select chapters</a>
            </label>
          </div>
          <div class="form-check form-check-inline col-sm-3 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              Verbal Reasoning
              <a href="#" class="caption-link">select chapters</a>
            </label>
          </div>
          <div class="form-check form-check-inline col-sm-3 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              Logical Reasoning
              <a href="#" class="caption-link">select chapters</a>
            </label>
          </div>
          <div class="form-check form-check-inline col-sm-3 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              Data Interpretation
              <a href="#" class="caption-link">select chapters</a>
            </label>
          </div>
          <div class="form-check form-check-inline col-sm-3 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              English Language
              <a href="#" class="caption-link">select chapters</a>
            </label>
          </div>
          <button class="btn btn-primary d-block" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="questions-section white-bg p-16">
    <h4 class="section-heading pb-3">Questions</h4>
    <div class="questions-container mt-3">
      <div class="question">
        <p>1. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>1. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>2. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>3. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>4. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>5. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>6. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
      <div class="question">
        <p>7. A train running at the speed of 60 km/hr a pole in 9 seconds. What is the length of the train?</p>
        <form action="" class="mb-3 d-flex flex-wrap">
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              120 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              150 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              220 metres
            </label>
          </div>
          <div class="form-check col-sm-6 no-padding">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              350 metres
            </label>
          </div>
        </form>
        <a href="#" class="link-secondary">View Answer</a>
        <a href="#" class="link-secondary">Solution</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('right-sidebar')
<div class="leaderboard white-bg p-16 shadow-theme">
<span class="close-icon">x</span>
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