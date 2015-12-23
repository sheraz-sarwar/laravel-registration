@extends('layouts.master')

@section('content')
    <div class="row">
        @if (isset($users) && !$users->isEmpty())
            <table class="table table-hover">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        <div class="text-center">
            {!! link_to_route('user.create', '+ Create a new user', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop