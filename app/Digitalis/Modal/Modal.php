<?php namespace Digitalis\Modal;

class Modal {
	
	public function make($body = '', $type = 'default', $header = null, $footer = null){
		
		//INIT VARS
		$id = 'messageModal';
		
		if($header !== null){
			$header = '<h4 class="modal-title">'.$header.'</h4>';
		}
		if($footer !== null){
			$footer = '<div class="modal-footer">'.$footer.'</div>';
		}
		if($type == 'confirm'){
			$id = 'confirmModal';
			$footer = '
				<div class="modal-footer">
					<div class="btn-group pull-right clearfix">
						<a class="btn btn-primary confirmBtn">Confirm</a>
						<a class="btn btn-default" data-dismiss="modal">Cancel</a>
					</div>
				</div>
			
			';	
		}
		
		if($type == 'unsavedChanges'){
			$id = 'unsavedChanges';
			$footer = '
				<div class="modal-footer">
					<div class="btn-group pull-right clearfix">
						<a class="btn btn-primary confirmBtn">Confirm</a>
						<a class="btn btn-default" data-dismiss="modal">Cancel</a>
					</div>
				</div>
			
			';	
		}
		
		return '<div class="modal fade" id="'.$id.'">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				'.$header.'
			  </div>
			  <div class="modal-body">
				'.$body.'
			  </div>
			  '.$footer.'
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->';
	}
	
	public function button($array = array()){	
		
		//DEFAULT VALUES
		$array['url'] 		= isset($array['url']) ? $array['url'] : null;
		$array['class'] 	= isset($array['class']) ? $array['class'] : 'default';
		$array['type'] 		= isset($array['type']) ? $array['type'] : 'default';
		$array['text']		= isset($array['text']) ? $array['text'] : 'Button';		
		
		//BUTTON TYPES
		$types = array(
			'default' 	=> '<a href="'.$array['url'].'" class="btn btn-'.$array['class'].'">'.$array['text'].'</a>',
			'close' 	=> '<button class="btn btn-'.$array['class'].'"  data-dismiss="modal">'.$array['text'].'</button>',
		);		
		return $types[$array['type']];	
	}
	
	
	
}