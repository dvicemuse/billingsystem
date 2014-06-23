@extends('layouts.default')
@section('content')
<div class="page-header">
   	<a href="{{ route('newClient') }}" class="btn btn-success pull-right" data-icon="plus">Add Client</a>
    <h1><i class="fa fa-users"></i> Clients</h1>
</div>
@include('clients.clientList')
@stop