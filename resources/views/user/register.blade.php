@extends('layouts.master')

@section('content')
    {!! Form::checkbox('opt_in_mail', 'opt_in_mail', true, [ 'id' => 'opt_in_mail' ]) !!}
@stop