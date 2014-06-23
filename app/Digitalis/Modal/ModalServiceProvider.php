<?php namespace Digitalis\Modal;

use Illuminate\Support\ServiceProvider;
class ModalServiceProvider extends ServiceProvider {

	public function register(){
		$this->app['Modal'] = $this->app->share(function($app){
			return new Modal($app['request']);
		});	
	}
	
}