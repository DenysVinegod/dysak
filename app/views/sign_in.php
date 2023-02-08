<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="website description" />

        <link rel="shortcut icon" href="/app/asserts/images/favicon.ico" />

        <link rel="stylesheet" href="/app/asserts/css/main_style.css">
        <link rel="stylesheet" href="/app/asserts/css/auth_style.css">

        <title>Page Title</title>

    </head>
    <body>

    <div id="logo">
        <img src='/app/asserts/images/logo.png'>
    </div>

    <form action='' method='POST' id='sign_in'>

        <fieldset>
            <table>
                <tr>
                    <th></th>
                    <th colspan=2>Авторизуйтесь</th>
                </tr>
                <tr>
                    <td class="label">Логін</td>
                    <td colspan=2><input type='text' name='user_name' required></td>
                </tr>
                <tr>
                    <td class="label">Пароль</td>
                    <td colspan=2><input type='password' name='user_pass' required></td>
                </tr>
                <tr>
                    <td class="label"></td>
                    <td>Запам'ятати пристрій</td>
                    <td><input type="checkbox" name="remember_me" value="true"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan=2><input type='submit'></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
        if (isset($_GET['passgen'])) { ?>
            <div id="password_generator">
                <form action='' method='POST'>
                    <fieldset>
                        <div>
                            <label for='generated_password'>Password</label>
                            <input type='textbox' id='generated_password' name="gen_pass">
                        </div>
                        <div>
                            <label for='hashed_password'>Hashed</label>
                            <input type='textbox' id='hashed_password' name='hash_pass'>
                        </div>
                        <div>
                            <input type='submit' value='Генерувати!'>
                        </div>
                    </fieldset>
                </form>
            </div>
        <?php }
    ?>

    </body>
</html>