<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title or '' }}</title>
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/bootstrap-theme.min.css') }}  
  {{ HTML::style('css/font-awesome.min.css') }}
  {{ HTML::style('css/jquery-ui.css') }}  
  {{ HTML::style('css/style.css') }}
  {{ HTML::style('css/bootstrap-formhelpers.min.css') }}
  {{ HTML::style('css/bootstrapValidator.css') }}
</head>
<body data-spy="scroll" data-target=".form-menu" >
	@include('includes.sidebar') 
  <div class="main-content">          
        @if($errors->has())
          @include('includes.errors')
        @endif
        @yield('content')        
   
  </div><!-- /.main-content -->
  
  
  	<!-- CONFIRMATION MODALS -->
  	{{ Modal::make('Are you sure?', 'confirm')}}
    
    <!-- RETURN MESSAGE MODALS -->
    @if(Session::has('message'))
    	{{ Modal::make(Session::get('message'), 'default', null, Modal::button(array('type'=>'close', 'text'=> 'Close'))) }}
	@endif
    
    {{ Modal::make('You have unsaved changes', 'unsavedChanges') }}
    
    <!-- JAVASCRIPT -->
  	{{ HTML::script('js/jquery-1.11.0.min.js') }}
    {{ HTML::script('js/jquery-ui.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/jquery.stickyelement.js') }}
    {{ HTML::script('js/jquery.dirtyforms.js') }}
    {{ HTML::script('js/jquery.validate.js') }}
	{{ HTML::script('js/main.js') }}
    {{ HTML::script('js/bootstrap-formhelpers.js') }}
	{{ HTML::script('js/bootstrapValidator.min.js') }}
</body>
</html>