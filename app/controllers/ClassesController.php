<?php
class ClassesController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('classes.index')
			->with('title', 'Classes');
	}
	
	public function newClass(){
		return $this->layout->content = View::make('classes.addClass')
			->with('title', 'Add Class');
	}
	
	public function editClass()
	{
		return $this->layout->content = View::make('classes.editClass')
			->with('title', 'Edit Class');
	}
}
