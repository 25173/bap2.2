@extends('layouts.app')

@section('content')
    <h1 class="h1">user overview</h1>
    <table class="table table-striped">
        <tr class="table-dark"><th>name</th> <th>email</th><th>admin</th></tr>
      @foreach($users as $user)
<tr>
        <td>{{$user->name}} </td>
        <td><a href="mailto:{{$user->email}}"></a>{{$user->email}}</td>
        <td>@if($user->is_admin === 1) SUPERADMIN @endif</td>
</tr>
      @endforeach
    </table>

    {{ $users->links() }}
@endsection
