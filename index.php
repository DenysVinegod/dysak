<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="website description" />

        <link rel="shortcut icon" href="/app/asserts/images/favicon.ico" />

        <link rel="stylesheet" href="/app/asserts/css/main_style.css">

        <title>Page Title</title>

    </head>
    <body>

    <?php

    session_start();
    if (!isset($_SESSION['auth'])) {
        $_SESSION['auth'] = 'unauthorized';
        $_SESSION['caution'] = 'Користувач не пройшов авторизацію!';
        header('Location: /app/views/sign_in.php');
        die();
    }

    if (isset($_SESSION['caution'])) {
        if ($_SESSION['caution'] !== '') {
            echo ('<div id="caution">'.$_SESSION['caution'].'</div>');
        }
    }

    if (isset($_SESSION['logout'])) {
        session_destroy();
    }

    var_dump($_SESSION);
    ?>

    </body>
</html>