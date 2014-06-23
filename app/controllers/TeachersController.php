<?php
class TeachersController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('teachers.index')
			->with('title', 'Teachers');
	}
	
	public function newTeacher(){
		return $this->layout->content = View::make('teachers.addTeacher')
			->with('title', 'New Teacher');
	}
	
	public function editTeacher(){
		return $this->layout->content = View::make('teachers.editTeacher')
			->with('title', 'New Teacher');
	}
	
	public function addTeacher(){
		
		//FORM VALIDATION
		$rules = array(
			'firstName' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('clients')->withErrors($validator);
		}
		else{
			return Redirect::to('teachers')
				->with('message', 'Success')
				->with('modalFooter', '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>')
				//->with('modalFooter', Modal::close('Close'))
				;	
		}		
	}
}
