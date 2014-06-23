@extends('layouts.default')

@section('content')
<div class="page-header">
	<a href="{{ route('newClass') }}" class="btn btn-success pull-right" data-icon="plus">Add Class</a>
    <h1><i class="fa fa-university"></i> Classes</h1>
</div>
@include('classes.scheduleForm')
@include('classes.classList')
@stop