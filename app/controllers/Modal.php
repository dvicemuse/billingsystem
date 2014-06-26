<?php
	class Modal extends BaseController {
	
		public function close($text, $type = 'default'){
			return '<button type="button" class="btn btn-'.$type.'" data-dismiss="modal">'.$text.'</button>';
		}
		
	}