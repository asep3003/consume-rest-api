@extends('layouts.master')
@section('title', 'User Edit Page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h4><u>Edit User</u></h4>
            <form method="POST" action="/users/{{ $user['id'] }}">
                @method('PUT')
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-2">
                        <strong for="firstName" class="form-label">First Name</strong>
                        <input type="text" name="firstName" class="form-control" id="firstName" value="{{ $user['firstName'] }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-2">
                        <strong for="lastName" class="form-label">Last Name</strong>
                        <input type="text" name="lastName" class="form-control" id="lastName" value="{{ $user['lastName'] }}">
                    </div>
                </div>
                <div class="float-end">
                    <a href="/users/" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection