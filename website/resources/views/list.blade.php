<!DOCTYPE html>
<html>
<head>
<title>Registered Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">
<h4>Registered Users</h4>
</div>

<div class="card-body">

<a href="/" class="btn btn-primary mb-3">Add New User</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>
</thead>

<tbody>

@foreach($users as $user)

<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
</tr>

@endforeach

</tbody>

</table>

</div>
</div>

</div>

</body>
</html>