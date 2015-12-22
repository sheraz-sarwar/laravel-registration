@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'user.postRegister']) !!}
    {!! Form::input('text', 'first_name') !!}
    {!! Form::submit('Register') !!}
    {!! Form::close() !!}
@stop