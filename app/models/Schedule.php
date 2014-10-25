<?php

class Schedule extends Eloquent {
	
	protected $table = 'schedules';

	public function user()
	{
		return $this->hasMany('User')->withPivot();
	}

	public function location()
	{
		return $this->hasMany('Location')->withPivot();
	}

	
}