<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent and Children List</title>
</head>
<body>
    <h1>Parent and Children List</h1>

    <ul>
        @foreach($parentItems as $parentItem)
            <li>
                {{ $parentItem->name }}
                <ul>
                    @foreach($parentItem->children as $child)
                        <li>{{ $child->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
