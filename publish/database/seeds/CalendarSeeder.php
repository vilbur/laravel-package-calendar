<?php

use Illuminate\Database\Seeder;
use Vilbur\Calendar\Models\Calendar;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(!Calendar::all()->first())
			factory(Calendar::class, 1)->create();
    }
}
