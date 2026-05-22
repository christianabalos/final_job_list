<!DOCTYPE html>
<html>
<head>
    <title>Job List</title>
</head>
<body>

<h1>Job List</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Company</th>
        <th>Location</th>
        <th>Salary</th>
    </tr>

    @foreach($jobs as $job)
    <tr>
        <td>{{ $job->id }}</td>
        <td>{{ $job->title }}</td>
        <td>{{ $job->description }}</td>
        <td>{{ $job->company }}</td>
        <td>{{ $job->location }}</td>
        <td>{{ $job->salary }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>

