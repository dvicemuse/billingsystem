@extends('layouts.default')

@section('content')
<div class="page-header">
<a href="{{ route('newEvent') }}" class="btn btn-success pull-right has-icon" data-icon="plus" data-toggle="collapse" data-target="#addTeacherForm">Add Event</a>
<h1 class="has-icon" data-icon="calendar">Events</h1>
</div>
@include('events.eventList')
@stop