@extends('layouts.default')
@section('content')
<div class="page-header">
    <h1 data-icon="users"><a href="{{ route('events') }}">Events</a>:: <small>Add Event</small></h1>
</div>
   
    	{{ Form::open(array('url' => 'teachers/add', 'class' => 'form')) }}
       <div class="stickyContainer" >  

            <section>
        	<div class="row">
            <h3>Basic Info</h3>
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::label('name', 'Event Name', array('class' => 'control-label')) }}
                                {{Form::text('name', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'Event Name'))}}
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    	<div class="col-sm-12">                        	
                        	<div class="form-group">
                            	{{ Form::label('date', 'Date', array('class' => 'control-label')) }}
                                <div class="bfh-datepicker">
                             	{{Form::text('date', '', array('class' => 'form-control input-sm', 'required'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-sm-6">                        	
                        	<div class="form-group">
                            	{{ Form::label('start', 'Start Time', array('class' => 'control-label')) }}
                                <div class="bfh-timepicker">
                             	{{Form::text('start', '', array('class' => 'form-control input-sm', 'required'))}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">                        	
                        	<div class="form-group">
                            	{{ Form::label('end', 'End Time', array('class' => 'control-label')) }}
                                <div class="bfh-timepicker">
                             	{{Form::text('end', '', array('class' => 'form-control input-sm', 'required'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
                             	{{Form::textarea('description', '', array('class' => 'form-control input-sm', 'required', 'rows' => '5', 'placeholder' => 'Event Description'))}}
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
            	{{ Form::button('Save', array('type' => 'submit', 'class' => 'btn btn-success has-icon sticky', 'data-icon' => 'floppy-o')) }}
            </div>
            </div>
            </section>
            
            <section>
			
            <div class="row">
                <h3>Address</h3>
                <div class="col-sm-4">
                    
				</div>
                <div class="col-sm-4" id="addressForm">  
                	<div class="row">
                        <div class="col-sm-8">
                        	<div class="form-group">
                            	{{ Form::label('addr1', 'Address', array('class' => 'control-label')) }}
                             	{{ Form::text('address[addr1]', '', array('class' => 'form-control input-sm', 'required', 'id' => 'addr1', 'placeholder' => '123 Example St')) }}
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="form-group">
                                {{ Form::label('addr2', 'Apt #', array('class' => 'control-label')) }}
                                {{ Form::text('address[addr2]', '', array('class' => 'form-control input-sm', 'id' => 'addr2', 'placeholder' => '3')) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('city', 'City', array('class' => 'control-label')) }}
                             	{{ Form::text('address[city]', '', array('class' => 'form-control input-sm', 'required', 'id' => 'city', 'placeholder' => 'Somecity')) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <div class="col-sm-6">
                        	<div class="form-group">
                                {{ Form::label('state', 'State', array('class' => 'control-label')) }}
                                {{Form::state('address[state]', array('class' => 'form-control input-sm', 'required', 'data-bv-notempty-message' => "The state is required", 'id' => 'state'))}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                {{ Form::label('zip', 'Zipcode', array('class' => 'control-label')) }}
                                
                                {{ Form::text('address[zip]', '', array('class' => 'form-control zipVal', 'data-bv-field' => 'zip', 'id' => 'zip', 'placeholder' => '#####')) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            
        {{ Form::close() }}
      	
        </div>
       
   <!--</div>
</div>-->
@stop