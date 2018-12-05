
<?php
ob_start();
$title = 'Список новостей';

?>

<div style="margin:20px;">
    <a class="btn btn-primary" href="newsAdd" role="button">Добавить новость
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

            echo '<h5>(#'.$row['ID_news'] .') ' . $row['date'] . '</h5>';
            echo '<h4>' . $row['title'] . '</h4>';
            echo '<p><i>Категория: </i>' . $row['category'] . '</p>';


            echo '<p style="text-align:right;">' . '<a href="newsEdit?id=' . $row['ID_news'] . '">Edit <span class="glyphicon glyphicon-pencil"></span></a> ';
            echo  '<a href="newsDelete?id=' . $row['ID_news'] . '">Delete <span class="glyphicon glyphicon-remove"></span></a></p>';
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
