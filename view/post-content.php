<!DOCTYPE html>
<html>
<head>
    <title>Blog: inserimento news</title>
</head>
<body>
<h1>Inserisci un articolo</h1>

    <form action="./controller/post-controller.php" method="post">
        Titolo:<br>
        <input name="titolo" type="text" size="30"><br>
        Articolo:<br>
        <textarea name="articolo" cols="40" rows="10"></textarea><br>
        <input name="submit" type="submit" value="Invia">
    </form>

</body>
</html>