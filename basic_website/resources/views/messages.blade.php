@extends('layouts.app')


@section('content')
<h1>All messages from the database</h1>

@if(count($messages) > 0)
@foreach($messages as $message)
  <ul class="list-group my-4">
  <li class="list-group-item">
  Name : {{$message->name}}
  </li>

  <li class="list-group-item">
  Email : {{$message->email}}
  </li>

  <li class="list-group-item">
  Message : {{$message->message}}
  </li>
</ul>
@endforeach
@endif
@endsection



@section('sidebar')
@parent
<p>This is the appended sidebar.</p>
@endsection