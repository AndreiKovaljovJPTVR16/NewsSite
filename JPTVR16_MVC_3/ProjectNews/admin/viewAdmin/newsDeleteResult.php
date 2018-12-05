<?php
/*
 * переменная $test:
 * true - добавление в таблицу news удалось
 * false - неудача
 * ссылка на список новостей
 */
ob_start();
?>

<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">

                <?php
                if (isset($test)) {
                    if ($test == true) {
                        ?>
                        <div class="alert alert-info">
                            <strong>Запись удалена.</strong>
                            <a href="newsActionList">Список новостей</a>
                        </div>
                        <?php
                    }//ture
                    elseif ($test == false) {
                        ?>
                        <div class="alert alert-warning">
                            <strong>Ошибка удаления записи!</strong>
                            <a href="newsActionList">Список новостей</a>
                        </div>
                        <?php
                    }//false
                }//isset
                ?>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php
include 'viewAdmin/templates/layout.php';
