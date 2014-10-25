<? 

class EventController extends BaseController 
{
	public function postCreateEvents()
	{
		$input = Input::getAll();

		print_r($input);exit();
	}
}