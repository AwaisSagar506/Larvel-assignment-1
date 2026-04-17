<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2>All Students</h2>

    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Home</a>
    <a href="{{ route('students.create') }}" class="btn btn-success mb-3">
Add Student
</a>

    <table class="table table-bordered">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}"
                       class="btn btn-info btn-sm">
                        View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>