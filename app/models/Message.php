<?php

class Message extends Eloquent {

	protected $table = 'messages';

	public function replies()
	{
		$this->hasMany('replies')->withPivot();
	}
	
}