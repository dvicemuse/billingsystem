@extends('layouts.default')
@section('content')
<div class="page-header">
<h1 data-icon="calendar"><a href="{{ route('events') }}">Events</a>:: <small>Edit Event</small></h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="pencil">Edit Event</h3>
    </div>
    <div class="panel-body stickyContainer">    
    	{{ Form::open(array('url' => 'events/add', 'class' => 'form')) }}
        	<div class="row">
                <div class="col-sm-4">
                    <h3>Class Info</h3>
                </div>
                <div class="col-sm-4">
                	<div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                              {{ Form::label('name', 'Class Name', array('class' => 'control-label')) }}                    
                              {{Form::text('name', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'Event Name'))}}
                      		</div>
                      	</div>
					</div>                    
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
                      			{{Form::textarea('description', '', array('class' => 'form-control input-sm', 'rows' => '5', 'required', 'placeholder' => 'Short Description of the class'))}}
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
                    <h3>Days &amp; Times</h3>
                </div>
                <div class="col-sm-4">
                	<div id="classTimes">
                    
                    </div>
                	<a class="addClassDay btn btn-success" data-icon="plus">Add a day and time to this class</a>
                </div>                
            </div>
        {{ Form::close() }}
    </div>
</div>

<!-- FOR DAYS & TIMES -->

<!-- TYPE SELECT -->
<div class="classDay hide" id="classDay"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {{ Form::label('type', 'Type', array('class' => 'control-label')) }}
                <div class="row">
                	<div class="col-sm-8">
                {{ Form::select('type', array('' => 'Select a type', 'weekly' => 'Weekly', 'monthly' => 'Monthly', 'oneTime' => 'One Time'),  null, array('class' => 'form-control classTypeSelector')) }}
                	</div>
                     <div class="col-sm-4">
                        <a class="btn btn-danger removeClassTime" data-icon="trash-o"></a>
                    </div>
                </div>
            </div>            
        </div>
                
    </div>                                                  
</div>

<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="pencil">Edit Event</h3>
    </div>
    <div class="panel-body stickyContainer">    
    	{{ Form::open(array('url' => 'events/add', 'class' => 'form')) }}
        	<div class="row">
                <div class="col-sm-4">
                    <h3>Class Info</h3>
                </div>
                <div class="col-sm-4">
                	<div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                              {{ Form::label('name', 'Class Name', array('class' => 'control-label')) }}                    
                              {{Form::text('name', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'Event Name'))}}
                      		</div>
                      	</div>
					</div>                    
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
                      			{{Form::textarea('description', '', array('class' => 'form-control input-sm', 'rows' => '5', 'required', 'placeholder' => 'Short Description of the class'))}}
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
                    <h3>Days &amp; Times</h3>
                </div>
                <div class="col-sm-4">
                	<div id="classTimes">
                    
                    </div>
                	<a class="addClassDay btn btn-success" data-icon="plus">Add a day and time to this class</a>
                </div>                
            </div>
        {{ Form::close() }}
    </div>
</div>

<!-- FOR DAYS & TIMES -->

<!-- TYPE SELECT -->
<div class="classDay hide" id="classDay"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {{ Form::label('type', 'Type', array('class' => 'control-label')) }}
                <div class="row">
                	<div class="col-sm-8">
                {{ Form::select('type', array('' => 'Select a type', 'weekly' => 'Weekly', 'monthly' => 'Monthly', 'oneTime' => 'One Time'),  null, array('class' => 'form-control classTypeSelector')) }}
                	</div>
                     <div class="col-sm-4">
                        <a class="btn btn-danger removeClassTime" data-icon="trash-o"></a>
                    </div>
                </div>
            </div>            
        </div>
                
    </div>                                                  
</div>
<!-- WEEKLY TYPE -->
<div id="weeklyType" class="hide">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {{ Form::label('day', 'Day', array('class' => 'control-label')) }}
                {{ Form::select('day', array('monday' => 'Monday', 'tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday', 'sunday' => 'Sunday' ),  null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('startTime', 'Start Time', array('class' => 'control-label')) }}
                {{Form::text('startTime', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'Event Name'))}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('endTime', 'End Time', array('class' => 'control-label')) }}
                {{Form::text('endTime', '', array('class' => 'form-control input-sm', 'required', 'placeholder' => 'Event Name'))}}
            </div>
        </div>
    </div>
</div>

@stop