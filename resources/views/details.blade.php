<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <!-- Check if $data exists -->
        @if($data)
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Student Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>First Name:</strong> {{ $data->firstname }}</p>
                    <p><strong>Last Name:</strong> {{ $data->lastname }}</p>
                    <p><strong>Age:</strong> {{ $data->age }}</p>
                    <p><strong>Enroll Number:</strong> {{ $data->enrollno }}</p>
                    <p><strong>Branch:</strong> {{ $data->branch }}</p>
                    <p class="d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2"><a href="{{ url('list/') }}">List View</a></p>
                </div>
            </div>
        @else
            <div class="alert alert-danger">
                <p>Student details could not be found.</p>
            </div>
        @endif
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>