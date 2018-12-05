<?php
ob_start();
$title = 'Регистрация пользователя. результат';
?>
<?php
if (isset($result) and $result['0']) {
    ?>
    <div class="container">

        <div class="alrt alert-info">
            <strong>Пользователь добавлен. 
            </strong>           
        </div>

    </div>

    <?php
} elseif (isset($result) and $result [0] == false) {
    ?>
    <div class="container">

        <div class="alert alert-warning">
            <strong>Ошибки добавления пользователя. 
            </strong>
            <p><?php echo $result[1]; ?></p>
            <p>Перейдите к форме регистрации</p>
        </div>

    </div>

    <?php
}
?>
<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
