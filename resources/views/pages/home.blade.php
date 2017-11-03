<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>With Better- Pratice better, Be better</title>

	<!-- Import Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,700,700i,800,800i" rel="stylesheet">

	<!-- Import Main CSS -->
	<link rel="stylesheet" href="{{ dist_asset('app.css') }}">
</head>

<body class="homepage">

	<!-- Hero header -->
	<header id="header" class="section">
		<nav class="navbar section-wrapper-mini">
			<div class="container">
				<div class="navigation-wrapper d-flex justify-content-between">
					<a class="navbar-brand d-flex align-items-center" href="/">
						<img src="{{ asset('images/logo-mark.svg') }}" width="35" height="35" alt="Better-logo">Better
					</a>
					<div class="d-flex justify-content-center">
						<ul class="nav justify-content-end mr-3 d-xs-none">
							<!-- <li class="nav-item active">
	              <a class="nav-link" href="/">Home <span clases="sr-only">(current)</span></a>
	            </li> -->
							<li class="nav-item">
								<a class="nav-link" href="/questions">Questions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/test-list">Tests</a>
							</li>
							<li class="nav-item">
								<a href="/signup" class="btn btn-primary ls-5">Sign Up</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<section id="hero-header" class="section-wrapper-contain text-center">
			<div class="container">
				<h1 class="heading-main ls-5 mb-3">Solve Competitive Questions for Free</h1>
				<p class="heading-sub ls-5 mb-4">India’s 1st website with free sample papers, progress tracking and peer mentorship.</p>
				<a href="/signin" class="btn btn-primary btn-large ls-5 mb-4">Become a Member</a>
				<p>Or</p>
				<p>Feel free to checkout our questions section for these exams</p>
				<div class="cta-wrapper">
					<a href="/questions" class="btn btn-default btn-wide">CAT</a>
					<a href="/questions" class="btn btn-default btn-wide">MAT</a>
					<a href="/questions" class="btn btn-default btn-wide">GMAT</a>
					<a href="/questions" class="btn btn-default btn-wide">XAT</a>
					<a href="/questions" class="btn btn-default btn-wide">SAT</a>
				</div>
			</div>
		</section>
	</header>

	<!-- Trending Questions Section -->
	<section class="section text-center section-wrapper-contain">
		<div class="section-header">
			<img src="images/trending.svg" alt="" class="section-icon mb-3">
			<h2 class="heading-primary mb-4">Trending Questions</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="section-body section-wrapper-xs white-bg shadow-theme border-theme d-flex mb-5">
					<div class="d-xs-none col-md-3 text-left">
						<!-- Select difficulty level -->
						<p class="section-caption">
							Select difficulty level
						</p>
						<form action="" class="mb-3">
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										Beginner (60%ile)
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										Intermediate (70%ile)
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										Advanced (80%ile)
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										Expert (90%ile)
									</label>
							</div>
						</form>
						<!-- Select Exam Name -->
						<p class="section-caption">
							Choose Exam
						</p>
						<form action="" class="mb-3">
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										CAT
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										MAT
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										GMAT
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										XAT
									</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										SAT
									</label>
							</div>
						</form>
					</div>
					<div class="col-sm-12 col-md-7 text-left">
						<p class="section-caption">
							Questions
						</p>
						<ol class="questions-list">
							<li>A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?</li>
							<li>A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:</li>
							<li>The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:</li>
							<li>A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?</li>
							<li>A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:</li>
							<li>The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:</li>
							<li>The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="section-cta text-center">
			<a href="/questions" class="btn btn-primary mb-6">Go to Trending Questions</a>
		</div>
		</div>
	</section>

	<!-- Section with some analytics about the platform- Infobar -->
	<section class="section platform-data section-wrapper-contain section-with-background theme color-reverse">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 text-center mb-3">
					<p><span class="text-big">10,000+</span><br>Questions</p>
				</div>
				<div class="col-xs-12 col-sm-4 text-center">
					<p><span class="text-big">200+</span><br>Sample Test</p>
				</div>
				<div class="col-xs-12 col-sm-4 text-center">
					<p><span class="text-big">25+</span><br>Full length Mock tests</p>
				</div>
			</div>
			<p class="text-center">All for Free for you to practice and perform the best in exams.</p>
		</div>
	</section>

	<!-- Features Wrapper -->

	<!-- Questions Board -->
	<section class="section section-wrapper-contain">
		<div class="section-header text-center">
			<img src="images/laptop.svg" alt="laptop-icon" class="section-icon mb-3">
			<h2 class="heading-primary mb-4">Questions Board</h2>
			<p class="section-subheading d-inline-block mb-5">There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="section-body mb-5">
						<img src="images/artboard.png" alt="" class="section-banner shadow-theme mb-5">
						<a href="/questions" class="btn btn-primary">Go to Questions Page</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Performance Indicator Section -->
		<section class="section section-wrapper">
			<div class="section-header text-center">
				<img src="images/percent.svg" alt="" class="section-icon mb-3">
				<h2 class="heading-primary mb-4">Performance Indicator</h2>
			</div>
			<div class="section-body">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-right d-flex justify-content-center align-items-center">
							<p class="explainer-text">There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.</p>
						</div>
						<div class="col-xs-12 col-sm-6 explainer-img">
							<img src="images/performance.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>

		<!-- Difficuly Index Section-->
		<section class="section section-wrapper">
			<div class="section-header text-center">
				<img src="images/puzzle.svg" alt="" class="section-icon mb-3">
				<h2 class="heading-primary mb-5">Difficulty Index</h2>
			</div>
			<div class="section-body">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-right d-flex justify-content-center align-items-center">
							<p class="explainer-text">There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.</p>
						</div>
						<div class="col-xs-12 col-sm-6 explainer-img">
							<img src="images/difficulty-index.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>

		<!-- Leaderboard Section-->
		<section class="section section-wrapper">
			<div class="section-header text-center">
				<img src="images/puzzle.svg" alt="" class="section-icon mb-3">
				<h2 class="heading-primary mb-4">Leaderboard</h2>
			</div>
			<div class="section-body">
				<div class="container text-center">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-right d-flex justify-content-center align-items-center">
							<p class="explainer-text">There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.</p>
						</div>
						<div class="col-xs-12 col-sm-6 explainer-img">
							<img src="images/leaderboard.svg" alt="">
						</div>
					</div>
					<a href="/signin" class="btn btn-primary">Sign Up</a>
				</div>
			</div>
		</section>
	</section>

	<!-- Testimonials Section -->
	<section class="section section-wrapper">
		<div class="section-header text-center">
			<img src="images/student.svg" alt="" class="section-icon mb-3">
			<h2 class="heading-primary mb-5">People love us</h2>
		</div>
		<div class="container w-1024">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="testimonial white-bg shadow-theme">
						<div class="testimonial-header d-flex">
							<img src="images/john-doe.png" alt="" class="testimonial-thumbnail mr-3">
							<div class="testimonial-header-info text-left">
								<h5>Aman Gupta</h5>
								<p><i>IAS Aspirant</i></p>
							</div>
						</div>
						<div class="testimonial-body">
							<p class="text-center testimonial-text"><i>"There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement."</i></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="testimonial section-with-background theme shadow-theme featured">
						<div class="testimonial-header d-flex">
							<img src="images/john-doe.png" alt="" class="testimonial-thumbnail mr-3">
							<div class="testimonial-header-info text-left">
								<h5>Aman Gupta</h5>
								<p><i>IAS Aspirant</i></p>
							</div>
						</div>
						<div class="testimonial-body">
							<p class="text-center testimonial-text"><i>"There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement."</i></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="testimonial white-bg shadow-theme">
						<div class="testimonial-header d-flex">
							<img src="images/john-doe.png" alt="" class="testimonial-thumbnail mr-3">
							<div class="testimonial-header-info text-left">
								<h5>Aman Gupta</h5>
								<p><i>IAS Aspirant</i></p>
							</div>
						</div>
						<div class="testimonial-body">
							<p class="text-center testimonial-text"><i>"There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement."</i></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-cta text-center pt-5 mt-3">
				<a href="/signup" class="btn btn-primary ">Join Us Today</a>
			</div>
	</section>

	<!-- FAQ Section -->
	<section class="section section-wrapper">
		<div class="section-header text-center">
			<img src="images/faq.svg" alt="" class="section-icon mb-3">
			<h2 class="heading-primary mb-5">FAQ</h2>
		</div>
		<div class="container">
			<div class="row d-flex flex-column justify-content-center align-items-center">
				<div class="col-xs-12 col-sm-9 text-left">
					<div class="faq-item section-wrapper-xs white-bg shadow-theme mb-3">					
						<div class="faq-header">
							<span class="expand-icon">&#x025B4;</span>
							<p><span class="mr-3">Q:</span>What is the level of questions here?</p>
						</div>
						<div class="faq-body pt-2">
							<p><span class="mr-3">A:</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="faq-item section-wrapper-xs white-bg shadow-theme mb-3">
						<div class="faq-header">
							<span class="expand-icon">&#x025B4;</span>
							<p><span class="mr-3">Q:</span>How do we offer conduct our test series and how often?</p>
						</div>
						<div class="faq-body pt-2">
							<p><span class="mr-3">A:</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="faq-item section-wrapper-xs white-bg shadow-theme mb-3">
						<div class="faq-header">
							<span class="expand-icon">&#x025B4;</span>
							<p><span class="mr-3">Q:</span>How do we offer personal guidance and doubt clearing sesions?</p>
						</div>
						<div class="faq-body pt-2">
							<p><span class="mr-3">A:</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="faq-item section-wrapper-xs white-bg shadow-theme mb-3">
						<div class="faq-header">
							<span class="expand-icon">&#x025B4;</span>
							<p><span class="mr-3">Q:</span>Why are we offering all this for free?</p>
						</div>
						<div class="faq-body pt-2">
							<p><span class="mr-3">A:</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="faq-item section-wrapper-xs white-bg shadow-theme mb-3">
						<div class="faq-header">
							<span class="expand-icon">&#x025B4;</span>
							<p><span class="mr-3">Q:</span>What is the level of questions here?</p>
						</div>
						<div class="faq-body pt-2">
							<p><span class="mr-3">A:</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section  -->
	<section class="section section-wrapper-contain section-with-background theme">
		<div class="section-header text-center">
			<h2 class="heading-primary mb-4 heading-width px-3">Request a feature or post a query. We’re always listening.</h2>
		</div>
		<div class="container d-flex justify-content-center">
			<div class="row">
				<div class="col-xs-12 text-center">
					<form class="contact-us-form">
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
						</div>
						<div class="form-group">
							<textarea name="exampleInputPassword1" id="exampleInputPassword1" cols="60" rows="3" placeholder="Enter your message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!--Footer Section  -->
	<section class="section section-wrapper-contain page-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 text-left">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
						sit amet, consectetur adipiscing elit.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 footer-nav-container">
					<ul class="footer-navigation">
						<li class="footer-navigation-item"><a href="/questions">Questions</a></li>
						<li class="footer-navigation-item"><a href="/tests">Tests</a></li>
						<li class="footer-navigation-item"><a href="/signin">Sign Up</a></li>
						<li class="footer-navigation-item"><a href="/login">Log In</a></li>
					</ul>
					<a href="/" class="navbar-brand d-flex align-items-center">
						<img src="images/logo-mark.svg" alt="" width="30px" height="auto">
						Better
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Signature  -->
	<section class="section section-wrapper-mini-contain text-center footer-signature">
		<p>Made with ❤ by <a href="/">Rajat Patel Designs</a></p>
	</section>

	<!-- Require Jquery  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Load Essential Scripts from- Bootstrap, Slim, Popper -->
	<script type="text/javascript" src="{{ dist_asset('app.js') }}"></script>
	</body>
</html>
