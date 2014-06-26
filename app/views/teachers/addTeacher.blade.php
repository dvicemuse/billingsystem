@extends('layouts.default')
@section('content')
<div class="page-header">
    <h1 data-icon="users" class="pull-left"><a href="{{ route('teachers') }}">Teachers</a>:: <small>Add Teacher</small></h1>
	<div class="pull-left form-menu"></div>
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::label('fname', 'First Name', array('class' => 'control-label')) }}
                                {{Form::text('fname', '', array('class' => 'form-control input-sm', 'data-bv-notempty'=> 'true'))}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::label('lname', 'Last Name', array('class' => 'control-label')) }}
                                {{Form::text('lname', '', array('class' => 'form-control input-sm', 'required'))}}
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
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('phone', 'Phone', array('class' => 'control-label')) }}
                             	{{Form::text('phone', '', array('class' => 'form-control input-sm phone-format', 'required', 'data-format' => '(ddd) ddd-dddd'))}}
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
                             	{{ Form::text('address[addr1]', '', array('class' => 'form-control input-sm', 'required', 'id' => 'addr1')) }}
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="form-group">
                                {{ Form::label('addr2', 'Apt #', array('class' => 'control-label')) }}
                                {{ Form::text('address[addr2]', '', array('class' => 'form-control input-sm', 'id' => 'addr2')) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="form-group">
                            	{{ Form::label('city', 'City', array('class' => 'control-label')) }}
                             	{{ Form::text('address[city]', '', array('class' => 'form-control input-sm', 'required', 'id' => 'city')) }}
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
                                
                                {{ Form::text('address[zip]', '', array('class' => 'form-control zipVal', 'data-bv-field' => 'zip', 'id' => 'zip')) }}
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