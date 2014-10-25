<?php

	class Event extends Eloquent {

		protected $table = "events";

		public function users()
		{
			$this->hasMany('User')->withPivot();
		}
	}