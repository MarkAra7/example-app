<!DOCTYPE html>
<html>

<head>
    <title>Static HTML Form</title>
</head>

<body>
    <form action="/submit" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>