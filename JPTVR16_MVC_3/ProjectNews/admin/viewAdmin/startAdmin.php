<?php ob_start(); ?>
<article>
    <h3>Админ панель</h3>
    <?php
    //проверка прав админа
    if (isset($_SESSION['status']) && $_SESSION['status'] != 1) {
        echo '<h2>Панель управления данными</h2>';
        echo '<p><b>' . $_SESSION['username'] . ',у вас нет прав!</b></p>';
        echo '<p>Перейдите на форму <a href="logout">Login</a></p>';
    } else {
        echo'<p>Приветствую вас,<b>' . $_SESSION['username'] . ',продолжайте работу</b></p>';
    }
    ?>
</article>

<?php $content = ob_get_clean(); ?>

<?php
include "viewAdmin/templates/layout.php";
