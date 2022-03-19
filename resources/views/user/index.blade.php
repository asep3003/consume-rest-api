@extends('layouts.master')
@section('title', 'User Page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mb-3">
                <a class="btn btn-success" href="/users/create">
                    <i class="bi bi-person-plus"></i>
                    Add User
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($messages = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {!! $messages !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @forelse($users['data'] as $user)
                    <tr>
                        <td>{{ $number++ }}.</td>
                        <td>{{ $user['firstName'] }}</td>
                        <td>{{ $user['lastName'] }}</td>
                        <td>
                            <form action="/users/{{ $user['id'] }}" method="POST" id="{{ $user['id'] }}">
                                <a href="/users/{{ $user['id'] }}/edit" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="alert('{{ $user['id'] }}')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr><td colspan="4" align="center">No Record(s) Found!</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('cjs')
    <script>
        function alert(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                }
            })
        }

        @if (Session::has('successDelete'))
            Swal.fire(
                'Deleted!',
                "{{ session('successDelete') }}",
                'success'
            )
        @endif
    </script>
@endsection