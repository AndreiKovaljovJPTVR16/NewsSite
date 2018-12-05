<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <link href="../public/css/bootstrap.css" rel="stylesheet">
        <link href="../public/css/login.css" rel="stylesheet">
    </head>

    <body>

        <div style="margin-top:5%">
            <!--            форма логин       -->

            <form class="form-signin" action="login" method="POST">

                <h3 class="form-signin-heading">Введите ваши данные</h3>
                <input type="text" name="username"  class="form-control" placeholder="Имя пользователя" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Пароль" >
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Войти</button>		

                <p style="padding-top:10px;">
                    <a href="../" >Web site view</a>
                <p>
                    <?php
                    if (isset($test) && $test[0] == false) {
                        echo $test[1];
                    }
                    ?>
                </p>


            </form>	



        </div> <!-- /container -->

    </body>
</html>
