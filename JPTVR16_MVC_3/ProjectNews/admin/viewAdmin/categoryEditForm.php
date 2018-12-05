<?php
ob_start();
?>

<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm"> 
                <legend><i class="glyphicon glyphicon-globe"></i> Редактировать категорию</legend>
                <form action="newsEditResult?id=<?php echo $row['ID_news']; ?>" method="POST" class="form" role="form" enctype="multipart/form-data">

                    <label for=""> 
                        Категория</label> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-12"> 
                            <select class="form-control" name="idCategory" required="" readonly disabled> 
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
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">
                        Сохранить</button>

                    <a href="categoryAction" style="margin-bottom: 20px;">К списку категорий</a>

                </form>
            </div>
        </div>   
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php
include 'viewAdmin/templates/layout.php';