<?php
//проверка входа
?>
<html>
    <head>
        <title>Dashboard</title>
        <link href="../public/css/bootstrap.css" rel="stylesheet">


        <!--   SCRIPT        -->	
        <script src="../public/js/jquery.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>

    </head>

    <body>
        <div class="container">     
            <!-- -->
            <div class="header clearfix">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <?php
                        echo '<ul class="nav nav-pills pull-right"> <li role="button">';
                        //приветствие админа
                        echo '<a href="logout">Logout </a></li> </ul>';

                        echo '<h4><a href="../" >WEB SITE</a> ';

                        // для админа условие
                        if (isset($_SESSION['status']) && $_SESSION['status'] == 1) {

                            echo '   <a href="newsAction">News Action</a>';
                            
                            echo '   <a href="categoryAction">Category Action</a>';
                        }
                        ?>
                    </div>
                </nav>
            </div>

            <div id="content" style="padding-top:20px; min-height:400px;">

                <?php if (isset($content)) echo $content; ?>

            </div>
            <footer class="footer">
                <p>&copy; 2018 Design Admin panel</p>
            </footer>

        </div> <!-- /container -->
    </body>
</html>