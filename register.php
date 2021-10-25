<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="./index.php?content=register_script" method="post">
        <div class="form-group">
            <label for="inputEmail">Vul hier uw e-mailadres in:</label>
            <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" autofocus>
            <small id="emailHelp" class="form-text text-muted">Uw privacy is gegarandeerd...</small>
        </div>

        <button type="submit" class="btn btn-warning btn-lg btn-block">Registreer</button>
    </form>
</body>

</html>