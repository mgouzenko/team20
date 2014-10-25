<?php

	class Weight extends Eloquent {

		protected $table = "weights";

		public function events()
		{
			$this->hasMany('Event')->withPivot();
		}
	}