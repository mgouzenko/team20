<?php

class Profile extends Eloquent {

	protected $table = 'profiles';
	protected $fillable = array('user_id');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function get hiddenNumber()
	{
		$number = $this->number;
		$hiddenNumber = "(***)-***-".substr($number,-4);
		return $hiddenNumber;
	}
}