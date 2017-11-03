<?php

/*
| Web Routes
*/

Route::get('/', function () {
  return view('pages.home');
});

Route::get('/signup', function () {
  return view('users.signup');
});

Route::get('/login', function () {
  return view('users.login');
});

Route::get('/forgot-password', function () {
  return view('users.forgot-password');
});

Route::get('/test-list', function () {
  return view('tests.index');
});

Route::get('/test', function () {
  return view('tests.show');
});

Route::get('/profile', function () {
  return view('pages.profile');
});

Route::get('/questions', function () {
  return view('questions.show');
});
