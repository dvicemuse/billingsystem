<?php
	$days = array(
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday',
		'Saturday',
		'Sunday'
	);
?>
<section>
<div class="row">
	<h3>Schedule</h3>
	<div class="col-sm-2">
    
    </div>
    <div class="col-sm-10">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
    @foreach($days as $key=>$day)    	
    	<li class="@if($key == 0) active @endif "><a href="#{{ $day }}" data-toggle="tab">{{ $day }}</a></li>
    @endforeach    
    </ul>   
    
    <!-- Tab panes -->
    <div class="tab-content">
      @foreach($days as $key=>$day)    	
    	<div class="tab-pane @if($key == 0) active @endif sDay" id="{{ $day }}"><table class="table table-striped table-hover">
        <tbody><tr>
            <td>Name</td>
            <td>Start</td>
            <td>End</td>
            <td>Teacher</td>
            <td></td>
        </tr>
        <tr class="clickableRow" data-target="/classes/edit/1">
            <td>{{ $day }}</td>
            <td>1:00 pm</td>
            <td>3:00 pm</td>
            <td>John</td>
            <td>
                <div class="btn-group">                       
                        <a href="/classes/edit/1" class="btn btn-default editBtn"><i class="fa fa-pencil" title="Edit"></i></a>
                        <a href="/classes/delete/1" class="btn btn-danger confirmModal" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </div>
            </td>
        </tr>
    </tbody></table>
    </div>
    @endforeach
    </div>
  </div>
</div>
</section>