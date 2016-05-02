@extends('layout')

@section('content')

  {{ "current time: " . \Carbon\Carbon::now() }}<br/>
  <h3>Create a Flyer</h3>

@stop