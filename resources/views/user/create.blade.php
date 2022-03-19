@extends('layouts.master')
@section('title', 'User Create Page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h4><u>Create User</u></h4>
            <form method="POST" action="/users">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-2">
                        <strong for="firstName" class="form-label">First Name</strong>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-2">
                        <strong for="lastName" class="form-label">Last Name</strong>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-2">
                        <strong for="email" class="form-label">Email</strong>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="float-end">
                    <a href="/users/" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection