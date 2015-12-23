@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'user.store']) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Gender') !!}
            <label class="radio-inline">
                {!! Form::radio('gender', 'male', ['class' => 'form-control']) !!} Male
            </label>
            <label class="radio-inline">
                {!! Form::radio('gender', 'female', ['class' => 'form-control']) !!} Female
            </label>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::text('password', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop