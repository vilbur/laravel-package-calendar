<?php namespace Vilbur\Calendar\Controllers;

use App\Http\Controllers\Controller;
use Vilbur\Calendar\Models\Calendar;

class CalendarController extends Controller {

    public function testView() {
		return \View::make('Calendar::view');
   }

	/**
	*/
	public function getAllCalendars()
	{
		return Calendar::all()->toArray();
	}
}