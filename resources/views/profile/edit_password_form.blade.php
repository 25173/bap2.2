@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>change password</h1>
        <form action="{{route('profile.update_password')}}" method="post">
            @csrf
            @method('PUT')

            @if($errors->count())
                <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
                </div>
            @endif
            <div class="form-group">
                <label for="newPassword">new password</label>
                <input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="enter your new password">
            </div>
            <div class="form-group">
                <label for="newPasswordConfirm">new password</label>
                <input type="password" name="newPassword_confirmation" class="form-control" id="newPasswordConfirm" placeholder="confirm enter your new password">
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
@endsection