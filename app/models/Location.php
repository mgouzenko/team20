<?php 

	class Location extends Eloquent {

		protected $table = "locations";

		public function events()
		{
			return $this->hasMany('Event')->withPivot();
		}
		public function schedules()
		{
			return $this->hasMany('Schedule')->withPivot();
		}
	}

