<?php
Route::get('registration', 'Devhiren\Registration\RegistrationController@index');
Route::post('registration-submit', 'Devhiren\Registration\RegistrationController@registrationSubmit');
