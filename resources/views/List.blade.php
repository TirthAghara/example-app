<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>EnrollNo</th>
                    <th>Branch</th>
                    <th>Details</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @if($Studentinfoos->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center">No records found.</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center"><a href="{{ url('addmember/') }}">Add Members</a></td>
                    </tr> 
                @else
                    @foreach ($Studentinfoos as $Studentinfoo)
                        <tr>
                            <td>{{ $Studentinfoo->id }}</td>
                            <td>{{ $Studentinfoo->firstname }}</td>
                            <td>{{ $Studentinfoo->lastname }}</td>
                            <td>{{ $Studentinfoo->age }}</td>
                            <td>{{ $Studentinfoo->enrollno }}</td>
                            <td>{{ $Studentinfoo->branch }}</td>
                            <td><a href="{{ url('detail/'. $Studentinfoo->id) }}">View Details</a></td>
                            <td><a href="{{ url('delete/'. $Studentinfoo->id) }}">Delete</a></td>
                            <td><a href="{{ url('edit/'. $Studentinfoo->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <td colspan="9" class="text-center"><a href="{{ url('addmember/') }}">Add Members</a></td>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
