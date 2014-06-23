@extends('layouts.default')
@section('content')
<div class="page-header">
    <h1 data-icon="users"><a href="{{ route('clients') }}">Clients</a>:: <small>Add Client</small></h1>
</div>
<div class="panel panel-default collapse in @if($errors->has()) in @endif alertSave" id="addClientForm">
	<div class="panel-heading">
    	<h3 class="panel-title">Edit Client</h3>
    </div>
    <div class="panel-body stickyContainer">    
    	{{ Form::open(array('url' => 'clients/update', 'class' => 'form-horizontal')) }}
        	<div class="row">
                    <div class="col-sm-4">
                    <h3>Package</h3>
               </div>
               <div class="col-sm-4">
                    {{ Form::select('package', array('1' => 'Package 1', '2' => 'Package 2', '3' => 'Package 3'),  null, array('class' => 'form-control')) }}
               </div>
               <div class="col-sm-4">
                	{{ Form::button('Save', array('type' => 'submit', 'class' => 'btn btn-success has-icon sticky', 'data-icon' => 'floppy-o')) }}
                </div>
            </div>
            <hr />
        	<div class="row">
            <div class="col-sm-4">
                <h3>Basic Info</h3>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="col-sm-6">
                        {{Form::text('firstName', '', array('class' => 'form-control input-sm'))}}
                        <span class="help-block">First Name</span>
                    </div>
                    <div class="col-sm-6">
                        {{Form::text('lastName', '', array('class' => 'form-control input-sm'))}}
                        <span class="help-block">Last Name</span>
                    </div>
                    <div class="col-sm-12">
                         {{Form::email('email', '', array('class' => 'form-control input-sm'))}}
                        <span class="help-block">Email</span>
                    </div>
                </div>
            </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-4">
                    <h3>Address</h3>
				</div>
                <div class="col-sm-4">  
                    <div class="form-group">                                  
                        <div class="col-sm-8">
                            {{Form::text('address', '', array('class' => 'form-control input-sm'))}}
                            <span class="help-block">Street Address</span>
                        </div>
                        <div class="col-sm-4">
                             {{Form::text('apt', '', array('class' => 'form-control input-sm'))}}
                            <span class="help-block">Apt #</span>
                        </div>
                        <div class="col-sm-6">
                             {{Form::text('city', '', array('class' => 'form-control input-sm'))}}
                            <span class="help-block">City</span>
                        </div>
                        <div class="col-sm-2">
                             {{Form::text('state', '', array('class' => 'form-control input-sm'))}}
                            <span class="help-block">State</span>
                        </div>
                        <div class="col-sm-4">
                             {{Form::text('zipcode', '', array('class' => 'form-control input-sm'))}}
                            <span class="help-block">Zip</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
            <div class="col-sm-4">
            	<h3>Billing</h3>
			</div>
            <div class="col-sm-4">  
                <div class="form-group">                                  
                    
                    <div class="col-sm-12">
                        {{Form::text('address', '', array('class' => 'form-control input-sm'))}}
                        <span class="help-block">Name on Card</span>
                    </div>
                    
                    <div class="col-sm-12">
                        {{Form::text('address', '', array('class' => 'form-control input-sm'))}}
                        <span class="help-block">CC Number</span>
                    </div>
                    
                    <div class="col-sm-4">                    	
                        {{ Form::selectMonth('month', null, array('class'=>'form-control')) }}                    
                        <span class="help-block">Exp Month</span>
                    </div>
                    
                    <div class="col-sm-4">                    	
                        {{ Form::select('year', array('2014', '2015', '2016', '2017', '2018', '2019', '2020'),  null, array('class' => 'form-control')) }}                        
                        <span class="help-block">Exp Year</span>
                    </div>
                    
                    <div class="col-sm-4">                    	
                        {{Form::text('address', '', array('class' => 'form-control input-sm'))}}                        
                        <span class="help-block">CVC</span>
                    </div>
                </div>
            </div>
           </div>
        {{ Form::close() }}
    </div>
</div>
@stop