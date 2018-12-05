
<?php
ob_start();
$title = 'Список категорий';

?>

<div style="margin:20px;">
    <a class="btn btn-primary" href="categoryAdd" role="button">Добавить категорию
        <span class="glyphicon glyphicon-plus"></span>
    </a>
</div>

<hr>
<div class="col-md-12">

    <?php
    if (count($rows) > 0) {
        ?>


        <?php
        foreach ($rows as $row) {

            echo'<div style="padding:right 10px">';

            echo '<p><i>Категория: </i>' . $row['category'] . '</p>';

            echo '<hr>';

            echo '</div>';
        }
        ?>



        <?php
    } else {
        echo '<p>Данных нет</p>';
    }
    ?>


</div>


<?php
$content = ob_get_clean();
include 'viewAdmin/templates/layout.php';