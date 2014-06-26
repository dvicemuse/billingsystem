@extends('layouts.default')

@section('content')
<div class="page-header">
<a href="{{ route('newPackage') }}" class="btn btn-success pull-right" data-icon="plus" data-toggle="collapse" data-target="#addPackageForm">Add Package</a>
<h1 class="has-icon" data-icon="cube">Packages</h1>
</div>
@include('packages.listPackages')
@stop