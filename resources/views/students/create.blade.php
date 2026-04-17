<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control">
        </div>

        <button class="btn btn-primary">Save Student</button>
    </form>

</div>

</body>
</html>