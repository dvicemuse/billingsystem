<?php
class SettingsController extends BaseController {
	
	protected $layout = 'layouts.default';
	
	public function showIndex(){
		return $this->layout->content = View::make('settings.index')
			->with('title', 'Settings');
	}
}
