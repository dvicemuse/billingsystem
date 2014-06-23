@extends('layouts.default')

@section('content')
<div class="page-header">
<h1 data-icon="cube"><a href="{{ route('packages') }}">Packages</a>:: <small>Edit Package</small></h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="pencil">Edit Package</h3>
    </div>
    <div class="panel-body stickyContainer">    
    	{{ Form::open(array('url' => 'view-packages/add', 'class' => 'form-horizontal')) }}
        <div class="row">
        		<div class="col-sm-4">
                	<h3>Package Info</h3>
                </div>
                <div class="col-sm-4">                    
                    <div class="form-group"> 
                    	{{ Form::label('name', 'Package Name', array('class' => 'control-label')) }}                   
						{{ Form::text('name', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'My sweet package')) }}
                    </div>
                    <div class="form-group">
						{{ Form::label('description', 'Package Description', array('class' => 'control-label')) }}                    
						{{Form::textarea('description', '', array('class' => 'form-control input-sm', 'rows' => '5', 'required', 'placeholder' => 'Enter a short description'))}}     
                    </div>                    
                </div>
                <div class="col-sm-4">
                	{{ Form::button('Save', array('type' => 'submit', 'class' => 'btn btn-success sticky', 'data-icon' => 'floppy-o')) }}
                </div>
			</div>
            <hr />
            <div class="row">
            	<div class="col-sm-4">
                	<h3>Package Pricing</h3>
                </div>
                <div class="col-sm-4">
                	<div class="form-group">                    
                        {{ Form::label('price', 'Package Price', array('class' => 'control-label')) }}  
                        <div class="input-group">
                            <span class="input-group-addon">$</span>                 
                            {{ Form::text('price', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => '99.99')) }}
                        </div>
                        <span class="help-text">The amount billed on the billing cycle</span>
                 	</div>
                    <div class="form-group">                    
                        {{ Form::label('price', 'Bill Cycle', array('class' => 'control-label')) }}  
                        {{ Form::select('billCycle', array(
                        	'1' => 'One Time', 
                            '2' => 'Weekly', 
                            '3' => '2 Weeks', 
                            '4' => 'Monthly',
                            '5' => '3 Month',
                            '6' => '6 Month',
                            '7' => 'Yearly'
                         ), null, array('class' => 'form-control', 'required')) }}
                 	</div>   
                </div>
            </div>             
        {{ Form::close() }}
    </div>
</div>
@stop