@extends('layouts.master')

@section('content')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'user.store']) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'e.g. Mohammed']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'e.g. Khan']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'e.g. example@email.com']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Gender') !!}
            <div class="row col-md-offset-0">
                <label class="radio-inline">
                    {!! Form::radio('gender', 'm', false) !!} Male
                </label>
                <label class="radio-inline">
                    {!! Form::radio('gender', 'f', false) !!} Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-2">
                    {!! Form::label('date_of_birth', 'Date of Birth') !!}
                    {!! Form::date('date_of_birth', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop