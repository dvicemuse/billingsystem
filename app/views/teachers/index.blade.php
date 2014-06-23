@extends('layouts.default')

@section('content')
<div class="page-header">
<a href="{{ route('newTeacher') }}" class="btn btn-success pull-right" data-icon="plus">Add Teacher</a>
<h1><i class="fa fa-briefcase"></i> Teachers</h1>
</div>
@include('teachers.teacherList')
@stop