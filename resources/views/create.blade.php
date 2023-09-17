<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Parent and Child</title>
</head>
<body>

@if(session('message'))
    <p>{{ session('message') }}</p>
@endif

<form action="{{ route('parentitems.store') }}" method="post">
    @csrf

    <!-- Parent name input -->
    <label for="parent[name]">Parent Name:</label>
    <input type="text" id="parent[name]" name="parent[name]" required>

    <br><br>
    <!-- Child name input -->
    <label for="child[name]">Child Name:</label>
    <input type="text" id="child[name]" name="child[name]" required>

    <br><br>
    <!-- Submit button -->
    <button type="submit">Submit</button>
</form>


</body>
</html>
