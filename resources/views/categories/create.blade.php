<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <h1>Create New Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf <!-- Ini untuk menghindari CSRF Attack -->
        <div>
            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <button type="submit">Save Category</button>
    </form>

</body>
</html>
