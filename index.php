<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: /app/views/sign_in.php');
        exit();
    }

    if (!isset($_SESSION['signIn_status'])) {
        $_SESSION['signIn_status'] = 'unauthorized';
        header('Location: /app/views/sign_in.php');
        exit();
    } else if ($_SESSION['signIn_status'] != 'authorized') {
        $_SESSION['caution'] = 'Користувач не пройшов авторизацію!';
        header('Location: /app/views/sign_in.php');
        exit();
    }

    if (isset($_SESSION['caution'])) {
        if (isset($_GET['caution'])) {
            if ($_GET['caution'] == 'ok') {
                unset($_SESSION['caution']);
                header('Location: .');
            }
        }
    }
?>

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

    if (isset($_SESSION['caution'])) {
        if ($_SESSION['caution'] !== '') { ?>
            <div id="caution">
                <?php echo $_SESSION['caution']; ?>
                <a href=".?caution=ok">OK</a>
            </div>
        <?php }
    }

    var_dump($_SESSION);
    ?>

    
    <a href=".?logout">Log out!</a>
    
    </body>
</html>