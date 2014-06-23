@extends('layouts.default')

@section('content')
<div class="page-header">
<h1 data-icon="briefcase">Teachers <small>Add Teacher</small></h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="plus">Add A Teacher</h3>
    </div>
    <div class="panel-body">    
    	{{ Form::open(array('url' => 'teachers/add', 'class' => 'form')) }}
        	<div class="row">
                <div class="col-sm-4">
                    <h3>Basic Info</h3>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('firstName', 'First Name', array('class' => 'control-label')) }}
                            	{{Form::text('firstName', '', array('class' => 'form-control input-sm', 'required'))}} 
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('lastName', 'Last Name', array('class' => 'control-label')) }}
                            	{{Form::text('lastName', '', array('class' => 'form-control input-sm', 'required'))}}
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
                            	{{Form::email('email', '', array('class' => 'form-control input-sm', 'required'))}}
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
                                {{Form::text('address', '', array('class' => 'form-control input-sm'))}} 
                            </div>                       
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {{ Form::label('apt', 'Apt #', array('class' => 'control-label')) }}
                                {{Form::text('apt', '', array('class' => 'form-control input-sm'))}} 
                            </div>                       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                {{ Form::label('city', 'City', array('class' => 'control-label')) }}
                                {{Form::text('city', '', array('class' => 'form-control input-sm'))}}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {{ Form::label('state', 'State', array('class' => 'control-label')) }}
                                {{Form::text('state', '', array('class' => 'form-control input-sm'))}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {{ Form::label('zipcode', 'Zipcode', array('class' => 'control-label')) }}
                                {{Form::text('zipcode', '', array('class' => 'form-control input-sm'))}}
                            </div>
                        </div>  
                    </div>            
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop