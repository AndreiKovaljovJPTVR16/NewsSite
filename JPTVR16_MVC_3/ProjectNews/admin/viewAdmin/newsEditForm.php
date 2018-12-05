<?php
ob_start();
?>

<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm"> 
                <legend><i class="glyphicon glyphicon-globe"></i> Редактировать новость</legend>
                <form action="newsEditResult?id=<?php echo $row['ID_news']; ?>" method="POST" class="form" role="form" enctype="multipart/form-data">

                    <div class="col-xs-12 col-md-12"> 
                        <div class="row"> 
                            <input class="form-control" name="title" placeholder="Заголовок" type="text" 
                                   required  autofocus value="<?php echo $row['title']; ?>"/> 
                            <br /> 
                        </div> 
                    </div> 

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

                    <label for="">Текст новости</label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <textarea class="form-control" rows="5" name="newsText" required=""><?php echo $row['news Text']; ?></textarea>
                        </div>
                    </div>
                    <br /> 
                    <label for="">Дата новости</label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <input type="date" class="form-control" name="date" required="" value="<?php echo $row['date']; ?>">
                        </div>
                    </div>
                    <br /> 
                    <label for="">Фото новости(old)</label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <img src="../images/<?php echo $row['newsPicture'] ?>" class="thumbnail" width="150px">
                            <input type="text" class="form-control" name="oldpicture" required="" readonly="" value="<?php echo $row['newsPicture'] ?>">
                        </div>
                    </div>
                    <br /> 
                    <label for="">Фото новости</label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <input type="file" class="form-control" name="picture">
                        </div>
                    </div>
                    <br /> 
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">
                        Сохранить</button>

                    <a href="newsAction" style="margin-bottom: 20px;">К списку новостей</a>

                </form>
            </div>
        </div>   
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php
include 'viewAdmin/templates/layout.php';
