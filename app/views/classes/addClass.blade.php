@extends('layouts.default')

@section('content')
<div class="page-header">
    <h1 data-icon="university"><a href="{{ route('classes') }}">Classes</a> <small>Edit Class</small></h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="plus">Add Class</h3>
    </div>
    <div class="panel-body">    
    	<form class="form-horizontal"> 
        	<div class="col-sm-12">
            	<div class="form-group">
            		<label class="col-sm-4">Name</label>
                    <div class="col-sm-8">
						<input type="text" name="name" class="form-control" placeholder="Class Name">
                	</div>
                </div>
                <div class="form-group">
                	<label class="col-sm-4">Description</label>
                	<div class="col-sm-8">
                    	<textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                </div>
            </div>                        
            <div class="col-sm-12">
            	<a href="#" class="btn btn-success">Save</a>
        	</div>           
        </form>
    </div>
</div>
@stop