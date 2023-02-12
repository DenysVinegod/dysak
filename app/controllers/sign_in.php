<?php

session_start();

if ((!isset($_POST['user_name'])) || (!isset($_POST['user_pass']))) {
    header("Location: /app/views/sign_in.php");
    exit();
}

// $hashed_pass = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);

require_once ($_SERVER['DOCUMENT_ROOT'].'/settings/db.php');

function clear_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$username = clear_input($_POST['user_name']);

$db = new mysqli(
    $db_settings['server_ip'], 
    $db_settings['username'], 
    $db_settings['password'], 
    $db_settings['base_name']
);

$query = "SELECT `password` FROM `users` WHERE  username = '{$username}' LIMIT 1;";
$result = $db->query($query);
$db->close();

if ($result->num_rows) {
    $row = $result -> fetch_assoc();
    if (password_verify($_POST['user_pass'], $row["password"])) {
        $_SESSION['signIn_status'] = 'authorized';
        unset($_SESSION['caution']);
        header("Location: /index.php");
        exit();
    } else {
        $_SESSION['caution'] = 'Пароль не вірний!';
    }
} else {
    $_SESSION['caution'] = 'Користувач не знайдений!';
}

header("Location: /app/views/sign_in.php");
exit();

?>