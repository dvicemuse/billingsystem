@extends('layouts.default')
@section('content')
<div class="page-header clearfix">
	
    <h1 data-icon="users" class="pull-left"><a href="{{ route('clients') }}">Clients</a>:: <small>Add Client</small></h1>
    <div class="pull-left form-menu"></div>
</div>

    	{{ Form::open(array('url' => 'clients/add', 'class' => 'form')) }}
       <div class="stickyContainer" >  
        	<section>
            <div class="row">
                <h3>Package</h3>
                <div class="col-sm-4">
                	
            	</div>
                <div class="col-sm-4">
                    <div class="form-group">
                        {{ Form::select('package[0]', array('' => 'Select a package', '1' => 'Package 1', '2' => 'Package 2', '3' => 'Package 3'),  null, array('class' => 'form-control packageSelect', 'id' => 'package0', 'data-bv-notempty'=> 'true')) }}
                    </div>
                    <a class="addPackageBtn btn btn-default" data-icon="plus">Add package another package</a>
                </div>
                <div class="col-sm-4">
                    {{ Form::button('Save', array('type' => 'submit', 'class' => 'btn btn-success has-icon sticky', 'data-icon' => 'floppy-o')) }}
                </div>
            </div>
            </section>
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
            <section>
            
            <div class="row">
            <h3>Billing</h3>
            <div class="col-sm-4">
            	
			</div>
            <div class="col-sm-4">
            	<div class="row">
                	<div class="col-sm-12">
                    	<div class="form-group">
                            {{ Form::label('billingSame', 'Billing Address is same as above', array('class' => 'control-label')) }}
                            {{ Form::checkbox('billingSame', 'value', true, array('id' => 'billingSame')) }}
                        </div>
                    </div>
                </div>
            	<div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('name', 'Name On Card', array('class' => 'control-label')) }}
                            {{Form::text('card[name]', '', array('class' => 'form-control input-sm', 'required'))}}
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            {{ Form::label('number', 'CC Number', array('class' => 'control-label')) }}
                           {{ Form::text('card[num]', '', array('class' => 'form-control ccNumber', 'data-bv-field' => 'ccNumber')) }}
                           
                        </div>
                    </div>
                    <div class="col-sm-4">
                    	<div class="form-group">
                            {{ Form::label('cvc', 'CVC', array('class' => 'control-label')) }}
                            {{ Form::text('card[cvc]', '', array('class' => 'form-control cvcVal', 'data-bv-field' => 'cvc')) }}
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('expmo', 'Exp Month', array('class' => 'control-label')) }}
                            {{ Form::select('card[expmo]', array('' => 'Exp Month', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'),  null, array('class' => 'form-control', 'required', 'minlength' => '2', 'maxlength' => '2')) }}
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                    	<div class="form-group">
                            {{ Form::label('expyr', 'Exp Year', array('class' => 'control-label')) }}
                            {{ Form::select('card[expyr]', array('' => 'Exp Year', '2014', '2015', '2016', '2017', '2018', '2019', '2020'),  null, array('class' => 'form-control', 'required', 'minlength' => '4', 'maxlength' => '4')) }}
                        </div>
                    </div>                    
                </div>
                <div id="ccAddress"></div>
             
            </div>
             
           </div>
        	</section>
        {{ Form::close() }}

      	
        </div>
       
   <!--</div>
</div>-->
@stop

