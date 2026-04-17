<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            Student Profile
        </div>

        <div class="card-body">

            <h4>Name: {{ $student->name }}</h4>
            <p>Email: {{ $student->email }}</p>
            <p>Age: {{ $student->age }}</p>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>

    </div>

</div>

</body>
</html>