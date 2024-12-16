
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Member Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Member Form</h2>
        <form action="{{ route('member.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Spoofing the PUT method -->

            <!-- First Name -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-1">
                    <label for="firstname" class="col-form-label">First Name</label>
                </div>
                <div class="col-4">
                    <input type="text" name="firstname" id="firstname" class="form-control" 
                           value="{{ $data->firstname }}" required>
                </div>
            </div>

            <!-- Last Name -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-1">
                    <label for="lastname" class="col-form-label">Last Name</label>
                </div>
                <div class="col-4">
                    <input type="text" name="lastname" id="lastname" class="form-control" 
                           value="{{ $data->lastname }}" required>
                </div>
            </div>

            <!-- Age -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="age" class="col-form-label">Age</label>
                </div>
                <div class="col-4">
                    <input type="number" name="age" id="age" class="form-control" 
                           value="{{ $data->age }}" required>
                </div>
            </div>

             <!-- Enroll No -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="enroll" class="col-form-label">EnrollNo</label>
                </div>
                <div class="col-4">
                    <input type="text" name="enrollno" id="enrollno" class="form-control" 
                    value="{{ $data->enrollno }}" aria-describedby="ageHelp" required>
                </div>
            </div>

            <!-- Branch -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="branch" class="col-form-label">Branch</label>
                </div>
                <div class="col-4">
                    <input type="text" name="branch" id="branch" class="form-control" 
                    value="{{ $data->branch}}" aria-describedby="ageHelp" required>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Member</button>
        </form>
    </div>
</body>
</html>
