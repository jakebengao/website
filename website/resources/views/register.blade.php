<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">
<div class="card-header bg-primary text-white">
<h4>Registration Form</h4>
</div>

<<div class="card-body">

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<form method="POST" action="/register">
@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Register</button>

<a href="/list" class="btn btn-success">View Insights</a>

</form>
</div>