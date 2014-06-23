<?php

class ClientsController extends BaseController {

	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('clients.index')
			->with('title', 'Clients');
	}
	
	public function addClient(){
		
		//FORM VALIDATION
		$rules = array(
			'firstName' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('clients')->withErrors($validator);
		} else {
			return Redirect::to('clients')
				->with('message', 'Your client was added successfully')
				->with('modalFooter', '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>')
				->with('modalHeader', 'This is the header for the modal')
				//->with('modalFooter', Modal::close('Close'))
				;
		}
	}
	
	public function editClient($id){
		return $this->layout->content = View::make('clients.editClient')
			->with('title', 'Edit Client');
	}
}
