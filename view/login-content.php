<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>login</title>
    <meta charset="utf-8"/>
</head>
<body>



<h1>Login</h1>
<section>
    <form action="/controller/login-controller.php" method="post">
        <label for="user">Nome utente</label>
        <input type="text" name="user" id="user" />
        <br/>
        <label for="password">password</label>
        <input type="password" name="password" id="password" />
        <br/>
        <input type="submit" name= "login" value="login"/>
    </form>
</section>


</html>