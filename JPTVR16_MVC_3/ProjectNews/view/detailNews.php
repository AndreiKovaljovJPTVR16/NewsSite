<?php

ob_start();
$title = $row['title'];
?>

<?php

echo '<div class="col-md-12">';

echo '<div style="float:left; padding: 5px;">';
echo '<img src="images/' . $row['newsPicture'] . '"  width=300 height=180>';
echo '</div>';

echo '<p>' . $row['news Text'] . '</p>';

echo '<h5>Дата: (' . $row['date'] . ')</h5>';

echo '<p><i>Категория: </i>' . $row['category'] . '</p>';
echo '<hr>';

echo '<p style="text-align:right;">' . '<a href="./">Main Page</a></p>';
echo '</div>';
?>

<?php

echo '<div class="col-md-12" style="margin: 5px;">';
echo '<p style=" text-shadow: 3px 2px grey;font-size: 40px;">Photo news: </p>';
foreach ($rows as $row) {




    echo '<div style="float:left; padding: 5px;">';
    echo '<img src="images/' . $row['picture'] . '"  width=300 height=180>';
    echo '</div>';
}
echo '</div>';
echo '<p style="text-align:left;">' . '<a href="./">News List</a></p>';
?>
<?php

$content = ob_get_clean();
include 'view/templates/layout.php';
