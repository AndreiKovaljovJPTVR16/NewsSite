
<?php

ob_start();
$title='Список новостей';
if(isset($category))$title.=' - '.$category['category'];



?>




<div class="col-md-2">
    <h3>Category</h3>
    <ul>
        <li><a href="news">
            All news
            </a>
        </li>
        <?php
        foreach ($rowsC as $row){
            
            echo '<li>';
            echo '<a href="category?id='.$row['ID_category'].'">';
              echo $row['category'];
            echo '</a>';
            echo '</li>';
        }
        
        ?>
    </ul>
    
    
</div>




<div class="col-md-9">
    
    <?php
    if(count($rows)>0){
    
    ?>

<?php
    foreach ($rows as $row){
    echo '<div class="col-md-12">';
     
     echo'<div style="float:left;  padding: 20px;">';
     echo '<img src="images/'.$row['newsPicture'].'"  width=200 height=120>';
     echo '</div>';
     
     echo'<div style="padding:right 10px">';
     
     echo '<h4>'.$row['title'].'</h4>';
     
     echo '<p><i>Категория: </i>'.$row['category'].'</p>';
   
     echo '<h5>'.$row['date'].'</h5>';
    

     
     

     echo '<p style="text-align:right;">'.'<a href="detail?id='.$row['ID_news'].'">More...</a></p>';
      echo '<hr>';
      
     //picture list
      
     

      
      echo '</div>';
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
$content= ob_get_clean();
include 'view/templates/layout.php';