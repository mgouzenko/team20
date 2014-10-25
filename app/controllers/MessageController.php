<?php

class MessageController extends BaseController {

	public $layout = 'layouts.dashboard';

	public function postCreateMessage()
	{
		

		$msg  = new Message;

		$msg->to_user = Input::get('toUser');
		$msg->from_user = Input::get('fromUser');
		$msg->text = Input::get('msg');
		$msg->save();

		return Redirect::to('/dashboard');
	}
}