<?php
ob_start();
?> 

<div class="col-md-12"> 


    <div class="container"> 
        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm"> 
                <legend><i class="glyphicon glyphicon-globe"></i> Добавить категорию</legend> 
                <form action="categoryAddResult?id=<?php echo $row['ID_news']; ?>" method="POST" class="form" role="form" enctype="multipart/form-data"> 



                    <label for=""> 
                        Категория</label> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-12"> 
                            <select class="form-control" name="idCategory" required=""> 
                                <?php
                                foreach ($rowsCat as $rowC) {
                                    echo '<option value="' . $rowC['ID_category'] . '"';
                                    if ($row['idCategory'] == $rowC['ID_category'])
                                        echo 'selected';
                                    echo '>';
                                    echo $rowC['category'];
                                    echo '</option>';
                                }
                                ?> 

                            </select> 
                        </div> 
                    </div> 
                    <br /> 









                    <br /> 
                    <br /> 


                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send"> 
                        Сохранить</button> 
                </form> 
                <a href="categoryAction" > К списку нкатегорий</a> 
            </div> 
        </div> 

    </div> 











</div> 

<?php $content = ob_get_clean(); ?> 
<?php include 'viewAdmin/templates/layout.php'; ?>