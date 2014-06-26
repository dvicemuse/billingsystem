<?php
class PackagesController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('packages.index')
			->with('title', 'Packages');
	}
	
	public function newPackage(){
		return $this->layout->content = View::make('packages.addPackage')
			->with('title', 'New Package');
	}
	
	public function editPackage(){
		return $this->layout->content = View::make('packages.editPackage')
			->with('title', 'Edit Package');
	}
}
