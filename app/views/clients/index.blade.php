@extends('layouts.default')
@section('content')
<div class="page-header">
   	<a href="#" class="btn btn-success pull-right" data-toggle="collapse" data-target="#addClientForm">Add Client</a>
    <h1><i class="fa fa-users"></i> Clients</h1>
</div>
@include('clients.addClient')
@include('clients.clientList')

@stop