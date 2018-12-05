<?php
ob_start();
$title = 'Форма регистрации';
?>
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="POST" action="answer">
                <h2>Пожалуйста регистрируйтесь</h2>
                <hr >

                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Имя пользователя" tabindex="3" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Адресс электронной почты" tabindex="4" required="">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Пароль" tabindex="5" required="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="confirm" id="password_confirmation" class="form-control input-lg" placeholder="Подтвердите пароль" tabindex="6" required="">
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-md-12"><input type="submit" value="Register" name="send" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>

            </form>
        </div>
    </div>
    <?php
    $content = ob_get_clean();
    include 'view/templates/layout.php';
    