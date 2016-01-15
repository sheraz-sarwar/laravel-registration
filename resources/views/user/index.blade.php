@extends('layouts.master')

@section('content')
    <div class="row">
        @if (isset($users) && !$users->isEmpty())
            <table class="table table-hover user-list">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Activated</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->first()->name }}</td>
                        <td>{{ ($user->activations->pluck('completed')->search(true) !== false) ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        <div class="text-center">
            {!! link_to_route('user.create', '+ Create a new user', [], ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop