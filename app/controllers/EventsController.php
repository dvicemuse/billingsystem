<?php
class EventsController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('events.index')
			->with('title', 'Events');
		
	}
	
	public function newEvent(){
		return $this->layout->content = View::make('events.addEvent')
			->with('title', 'New Event');		
	}
	
	public function editEvent(){
		return $this->layout->content = View::make('events.editEvent')
			->with('title', 'Edit Event');		
	}	
	
	
	public function addEvent(){
		
		//FORM VALIDATION
		$rules = array(
			'name' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('events')
				->withErrors($validator);
		}
		else{
			return Redirect::to('events')
				->with('message', 'Success')
				->with('modalFooter', '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>')
				//->with('modalFooter', Modal::close('Close'))
				;	
		}
	}
	
	
}
