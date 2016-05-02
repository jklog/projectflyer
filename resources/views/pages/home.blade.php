@extends('layout')

@section('content')

{{--   {{ "current time: " . \Carbon\Carbon::now() }}<br/>
  {{ "add 7 days:  " . \Carbon\Carbon::now()->addDays(7) }} --}}
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Project Flyer</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    {{-- <button class="btn btn-primary" <a href="/flyers/create">Create</a></button> --}}

    <a href="/flyers/create">Create</a>

    {{-- Route::get('normindex', array('as' => 'normindex', 'uses' => 'Normcontroller@index') ); --}}

  </div>

@stop