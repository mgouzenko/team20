<?php 

class WeightController extends BaseController {

	public function postCreateWeight()
	{
		$weight = new weight;
		$weight->weights = Input::get('weight');
		$weight->save();
	}
}