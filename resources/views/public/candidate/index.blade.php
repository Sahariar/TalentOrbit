<!DOCTYPE html>
<html>
<head>
    <title>Candidate List</title>
</head>
<body>
    <h1>Candidate List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->id }}</td>
                    <td>{{ $candidate->name }}</td>
                    <td>{{ $candidate->email }}</td>
                    <td>{{ $candidate->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>