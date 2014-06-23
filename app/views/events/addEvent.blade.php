@extends('layouts.default')
@section('content')
<div class="page-header">
<h1 data-icon="calendar"><a href="{{ route('events') }}">Events</a>:: <small>Add Event</small></h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Add An Event</h3>
    </div>
    <div class="panel-body stickyContainer">    
    	{{ Form::open(array('url' => 'events/add', 'class' => 'form')) }}
        	<div class="row">
                <div class="col-sm-4">
                    <h3>Event Info</h3>
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
                        <div class="col-sm-4">
                            <div class="form-group">
                            	{{ Form::label('date', 'Date', array('class' => 'control-label')) }}
                                {{Form::text('date', '', array('class' => 'form-control input-sm datepicker', 'required', 'placeholder' => '01/15/2015'))}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="form-group">
                                {{ Form::label('timeStart', 'Start Time', array('class' => 'control-label')) }}
                                {{Form::text('timeStart', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => '12:00pm'))}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="form-group">
                                {{ Form::label('timeEnd', 'End Time', array('class' => 'control-label')) }}
                                {{Form::text('timeEnd', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => '12:00pm'))}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
                      			{{Form::textarea('description', '', array('class' => 'form-control input-sm', 'rows' => '5', 'required', 'placeholder' => 'Short Description of the event'))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                	{{Form::button('Save', array('class' => 'btn btn-success sticky', 'type' => 'submit', 'data-icon' => 'floppy-o'))}}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-4">
                    <h3>Address</h3>
                </div>
                <div class="col-sm-4">                      
                    <div class="row">                                 
                        <div class="col-sm-8">
                            <div class="form-group">
                                {{ Form::label('address', 'Address', array('class' => 'control-label')) }}
                                {{Form::text('address', '', array('class' => 'form-control input-sm', 'placeholder' => '123 Yourstreet way'))}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {{ Form::label('suite', 'Suite #', array('class' => 'control-label')) }}
                                {{Form::text('suite', '', array('class' => 'form-control input-sm', 'placeholder' => '3'))}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                {{ Form::label('city', 'City', array('class' => 'control-label')) }}
                                {{Form::text('city', '', array('class' => 'form-control input-sm', 'placeholder' => 'City'))}}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {{ Form::label('state', 'State', array('class' => 'control-label')) }}
                                {{Form::text('state', '', array('class' => 'form-control input-sm', 'placeholder' => 'St'))}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {{ Form::label('zipcode', 'Zipcode', array('class' => 'control-label')) }}
                                {{Form::text('zipcode', '', array('class' => 'form-control input-sm', 'placeholder' => '55555'))}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop