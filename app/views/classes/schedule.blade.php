@extends('layouts.default')

@section('content')
<div class="page-header">
	<a href="#" class="btn btn-success pull-right" data-toggle="collapse" data-target="#addClassForm">Add Class</a>
    <h1><i class="fa fa-university"></i> Class Schedule</h1>
</div>
@include('classes.addClass')
@include('classes.scheduleForm')
@include('classes.classList')
@stop