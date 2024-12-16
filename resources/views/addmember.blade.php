<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="container m-5">
        <h2 class="mb-4">Add Member Form</h2>
        <form action='/addmember' method="POST">
            @csrf
            <!-- First Name -->
            <div class="row g-3 align-ite ms-center mb-3">
                <div class="col-1">
                    <label for="firstname" class="col-form-label">First Name</label>
                </div>
                <div class="col-4">
                    <input type="text" name="firstname" id="firstname" class="form-control" 
                           aria-describedby="firstnameHelp" required>
                </div>
                <div class="col-auto">
                    <span id="firstnameHelp" class="form-text">Enter your first name.</span>
                </div>
            </div>

            <!-- Last Name -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-1">
                    <label for="lastname" class="col-form-label">Last Name</label>
                </div>
                <div class="col-4">
                    <input type="text" name="lastname" id="lastname" class="form-control" 
                           aria-describedby="lastnameHelp" required>
                </div>
                <div class="col-auto">
                    <span id="lastnameHelp" class="form-text">Enter your last name.</span>
                </div>
            </div>

            <!-- Age -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="age" class="col-form-label">Age</label>
                </div>
                <div class="col-4">
                    <input type="number" name="age" id="age" class="form-control" 
                           aria-describedby="ageHelp" required>
                </div>
                <div class="col-auto">
                    <span id="ageHelp" class="form-text">Enter your age.</span>
                </div>
            </div>

            <!-- EnrollNo -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="enroll" class="col-form-label">EnrollNo</label>
                </div>
                <div class="col-4">
                    <input type="text" name="enrollno" id="enrollno" class="form-control" 
                           aria-describedby="ageHelp" required>
                </div>
                <div class="col-auto">
                    <span id="enrollnoHelp" class="form-text">Enter your EnrollNo.</span>
                </div>
            </div>

            <!-- Branch -->
            <div class="row g-3 align-items-center mb-4">
                <div class="col-1">
                    <label for="branch" class="col-form-label">Branch</label>
                </div>
                <div class="col-4">
                    <input type="text" name="branch" id="branch" class="form-control" 
                           aria-describedby="ageHelp" required>
                </div>
                <div class="col-auto">
                    <span id="branchHelp" class="form-text">Enter your Branch Name.</span>
                </div>
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
