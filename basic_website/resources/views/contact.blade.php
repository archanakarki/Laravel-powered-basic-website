@extends('layouts.app')


@section('content')
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur? Amet, ex distinctio, voluptatibus aliquid possimus cupiditate similique aut reprehenderit, eum nesciunt quidem pariatur dolorum tenetur enim in rem sint. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat vero repellendus natus illum provident expedita distinctio. Exercitationem, atque, voluptas quos culpa quidem cum deleniti natus rem quia totam earum. Aspernatur?</p>

{{ Form::open(['url' => 'contact/submit'])}}
    <div class="form-group">
     <!--Name-->
     {{Form::label('name', 'Name')}}
    {{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your full name'])}}
    </div>

    <div class="form-group">
    <!--Email-->
    {{ Form::label('email', 'Email Address')}}
    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address'])}}
    </div>

    <div class="form-group">
    <!--Message-->
    {{ Form::label('message', 'Message')}}
    {{ Form::textarea('message', '', ['class'=>'form-control', 'placeholder' => 'Enter message'])}}
    </div>

    <div class="form-group">
    <!--Submit-->
    {{ Form::submit('Send Message', ['class' => 'btn btn-primary btn-block'])}}
    </div>

{{ Form::close()}}
@endsection