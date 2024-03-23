@extends('layouts.master')

@section('content')

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

<style>
    .table-container {
        background-color: white;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .dataTables_wrapper {
        margin-top: 20px;
    }

    .dataTables_filter {
        float: right;
    }
    
</style>

<div class="container">
    <div class="table-container">
        <h2>Users Directory</h2>
        <table id="items-table" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Years of Experience</th>
                    <th>Education</th>
                    <th>Skills</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($DirUsers as $DirUser)
                <tr>
                    <td>{{ $DirUser->id }}</td>
                    <td>{{ $DirUser->name }}</td>
                    <td>{{ $DirUser->location }}</td>
                    <td>{{ $DirUser->experience }}</td>
                    <td>{{ $DirUser->education }}</td>
                    <td>
                        @if($DirUser->skill1 == 1)
                        <span class="badge badge-primary">ASP.NET</span>
                        @endif
                        @if($DirUser->skill2 == 1)
                        <span class="badge badge-success">C#</span>
                        @endif
                        @if($DirUser->skill3 == 1)
                        <span class="badge badge-info">JavaScript</span>
                        @endif
                        @if($DirUser->skill4 == 1)
                        <span class="badge badge-warning">CSS</span>
                        @endif
                        @if($DirUser->skill5 == 1)
                        <span class="badge badge-danger">SQL</span>
                        @endif
                    </td>
                    <!-- Add more columns as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#items-table').DataTable();
    });
</script>

@endsection
