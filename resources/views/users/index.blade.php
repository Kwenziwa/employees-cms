@extends('layouts.main')


@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>

        @if (session()->has('message'))
        <div class="alert alert-success">
           {{ session('message') }}
        </div>
        @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('users.create') }}" class="float-right"> Create </a>

        </div>

       <div class="row">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user )

                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->first_name .' '. $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>


                    @endforeach

                </tbody>
              </table>
        </div>
       </div>

    </div>
@endsection


