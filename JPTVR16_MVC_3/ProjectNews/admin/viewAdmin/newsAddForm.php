<?php
ob_start();
?>

<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
                <legend><i class="glyphicon glyphicon-globe"></i> Добавить новость</legend>
                <form action="newsAddResult" method="POST" class="form" role="form" enctype="multipart/form-data">

                    <label for="">Заголовок новости</label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <input class="form-control" name="title" placeholder="News title" type="text"
                                   required autofocus />
                        </div>
                        <label for="">Категория новости</label>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <select class="form-control" name="idCategory" required="">
                                    <?php
                                    foreach ($rowsCat as $row) {
                                        echo '<option value="' . $row['ID_category'] . '"';
                                        echo '>';
                                        echo $row['category'];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <label for="">Текст новости</label>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <textarea class="form-control" rows="5" name="newsText" required=""></textarea>
                            </div>
                        </div>

                        <label for="">Дата новости</label>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <input type="date" class="form-control" name="date" required="" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>

                        <label for="">Фото новости</label>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <input type="file" class="form-control" name="picture" required="">
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">
                            Сохранить</button>

                        <a href="newsAction" style="margin-bottom: 20px;">К списку новостей</a>

                    </div>   
                </form>
            </div>
        </div>   
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php
include 'viewAdmin/templates/layout.php';
