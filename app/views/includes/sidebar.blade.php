<?php
	$links = array(
		'dashboard' => 'tachometer',
		'clients' 	=> 'users',
		'classes' 	=> 'university',
		'teachers' 	=> 'briefcase',
		'events'	=> 'calendar',
		'packages' 	=> 'cube',
		'settings' 	=> 'cog',
	);
	
	$url = str_replace('view-', '', Request::segment(1));
	if($url == ''){
		$url = 'dashboard';
	}
?>
 <div class="sidebar">
  	<ul>
    	<div id="orgName" class="navTop">Organization Name</div>
        <div id="userName" class="navTop">John Smith</div>
    	@foreach($links as $link=>$icon)
       	 <li class="@if($url == $link) active @endif"><a href="{{ route($link) }}" data-icon="{{ $icon }}">{{ $link }}</a>  </li>
        @endforeach
        <!--<li><a href="{{ route('dashboard') }}" data-icon="tachometer">Dashboard</a>  </li>
    	<li><a href="{{ route('clients') }}" data-icon="users">Clients</a>  </li>
        <li><a href="{{ route('classes') }}" data-icon="university">Classes</a></li>
        <li><a href="{{ route('teachers') }}" data-icon="briefcase">Teachers</a></li>
        <li><a href="{{ route('events') }}" data-icon="calendar">Events</a></li>
        <li><a href="{{ route('packages') }}" data-icon="cube">Packages</a></li>
        <li><a href="{{ route('settings') }}" data-icon="cog">Settings</a></li>
        <li></li>-->
    </ul>
  </div><!-- /.sidebar -->