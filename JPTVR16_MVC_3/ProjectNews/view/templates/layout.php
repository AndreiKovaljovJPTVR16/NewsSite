<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">   

        <!-- CSS Bootstrap & Custom -->
        <script src="public/js/jquery.js" type="text/javascript"></script>
        <script src="public/js/bootstrap.js" type="text/javascript"></script>
        <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">

            <nav class="navbar navbar-inverse container">
                <div class="container-fluid">	
                    <div class="navbar-header navbar-inverse">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>	
                    </div>	


                    <div class="collapse navbar-collapse main_menu" id="myNavbar">

                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (!isset($_SESSION['sessionID'])) {
                                ?>

                                <li><a href="admin">LogIn</a></li>
                                <li><a href="register">Register </a></li>
                            <?php } else { ?>
                                <li><a href="admin/login" target=_blank>Admin panel</a></li>
                                <li class="dropdown" style="margin-top:7px;">
                                    <button class="btn btn-default dropdown-toggle"  type="button" data-toggle="dropdown"><?php echo $_SESSION['username'] ?> 
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a style="color: #b10021; background-color:white;" href="admin/logout">Logout</a></li>								  
                                    </ul>
                                </li>							
                            <?php } ?>

                        </ul>


                        <ul class="nav  navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="news">News List</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        </ul>

                        <form class="nav navbar-form navbar-right" method="GET" action="search">
                            <input class="form-control" type="text" name="text" placeholder="Введите текст для поиска">

                            <button type="submit" class="btn btn-default">Seatch</button>

                        </form>








                    </div>	
                </div>	
            </nav> <!-- /.row -->



            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1 class="templatemo_logo">
                            <?php
                            if (isset($title)) {
                                //print($title);
                                echo $title;
                            }
                            ?>
                        </h1> <!-- /.page title -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.container -->



        <!-- php code -->
        <div class="container">
            <?php
            if (isset($content)) {
                print($content);
            }
            ?>
        </div>					






        <div class="container">
            <hr>
            <footer>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy; Copyright Design 2018 | JPTVR16 </p>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </footer>
        </div> <!-- /.container -->



    </body>
</html>