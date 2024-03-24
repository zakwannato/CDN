@extends('layouts.master')

@section('content')

<div class="container bg-white py-4">
    <h1>User Distribution by Location</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Location</th>
                    <th>Total Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach($DashUsers as $DashUser)
                <tr>
                    <td>{{ $DashUser->location }}</td>
                    <td>{{ $DashUser->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection