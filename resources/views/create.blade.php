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
    <div>
        <label for="parent_name">Parent Name:</label>
        <input type="text" id="parent_name" name="parent_name" required>
    </div>

    <div>
        <label for="child_name">Child Name:</label>
        <input type="text" id="child_name" name="child_name" required>
    </div>

    <button type="submit">Submit</button>
</form>

</body>
</html>
