<!DOCTYPE html>
<html>

<head>
    <title>Forma</title>
</head>

<body>
    <form action="/submit.php" method="POST">
        @csrf
        <input type="text" name="vards" placeholder="Ievadiet vārdu">
        <button type="submit">Sūtīt</button>
    </form>
</body>

</html>