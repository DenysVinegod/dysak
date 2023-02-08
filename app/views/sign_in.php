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

    <form action='' method='POST'>

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

    </body>
</html>