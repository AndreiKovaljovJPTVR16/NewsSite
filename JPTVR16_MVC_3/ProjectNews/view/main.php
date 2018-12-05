<?php

ob_start();
$title='Сайт новостей';

?>

<?php
    foreach ($rows as $row){
    echo '<div class="col-md-4">';
     echo '<img src="images/'.$row['newsPicture'].'"  width=300 height=180>'; 
     echo '<h4>'.$row['title'].'</h4>';
     echo '<h5>Дата: ('.$row['date'].')</h5>';
     echo '<p><i>Категория: </i>'.$row['category'].'</p>';
     echo '<p style="text-align:right;">'.'<a href="detail?id='.$row['ID_news'].'">More...</a></p>';
    echo '</div>';
  
    
}


?>



<?php 
$content= ob_get_clean();

include 'view/templates/layout.php';