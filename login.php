<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <meta charsetset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <div class="container">
        <h4 class="text-center">Halaman Login Pasien</h4>
        <hr>


        <form action="loginproses.php" method="post"> 

            <ul>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </div>

                <button type="submit" name="login">login</button>

            </ul>
        </form>

</body>

</html>