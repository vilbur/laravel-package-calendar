<?php


Route::get('/calendar', 'Vilbur\Calendar\Controllers\CalendarController@testView');

/* API */
Route::get('/db/calendar',	'Vilbur\Calendar\Controllers\CalendarController@getAllCalendars');