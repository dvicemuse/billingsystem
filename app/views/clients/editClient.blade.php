@extends('layouts.default')
@section('content')
<div class="page-header">
   	<a class="btn btn-success pull-right headerSubmit" data-toggle="collapse" data-target="#addClientForm">Save</a>
    <h1>Clients <small>Editing Client</small></h1>
</div>
@include('clients.editClientForm')
@stop