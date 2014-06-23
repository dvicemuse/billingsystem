<?php
class DashboardController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('dashboard.index')
			->with('title', 'Dashboard');
	}
}
