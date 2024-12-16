<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty List</title>
</head>
<body>
    <h1>Faculty List</h1>
    <ul>
        @forelse($items as $facultyName)
            <li>{{ $facultyName }}</li>
        @empty
            <li>No faculty names available.</li>
        @endforelse
    </ul>
</body>
</html>
