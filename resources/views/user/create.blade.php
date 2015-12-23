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
                    {!! Form::radio('gender', 'male', ['class' => 'form-control']) !!} Male
                </label>
                <label class="radio-inline">
                    {!! Form::radio('gender', 'female', ['class' => 'form-control']) !!} Female
                </label>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('day', 'Date of Birth') !!}
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-xs-2">
                            {!! Form::text('day', null, ['class' => 'form-control', 'placeholder' => 'DD']) !!}
                        </div>
                        <div class="col-xs-2">
                            {!! Form::text('month', null, ['class' => 'form-control', 'placeholder' => 'MM']) !!}
                        </div>
                        <div class="col-xs-3">
                            {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => 'YYYY']) !!}
                        </div>
                    </div>
                </div>
            </div>
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