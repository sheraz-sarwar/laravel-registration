@extends('layouts.master')

@section('content')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-container col-md-6">
    {!! Form::open(['route' => 'user.postLogin']) !!}
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'e.g. example@email.com']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-success form-control']) !!}
        </div>
        {!! link_to_route('user.create', "Don't have an account? Click here to create one", []) !!}
    {!! Form::close() !!}
    </div>
@stop