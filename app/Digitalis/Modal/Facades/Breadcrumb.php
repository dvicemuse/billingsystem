<?php namespace Digitalis\Modal\Facades;

use Illuminate\Support\Facades\Facade;
class Modal extends Facade {
	protected static function getFacadeAccessor(){
		return 'Modal';	
	}
}