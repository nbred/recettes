<?php
$r = __DIR__;
require_once($r . '\dbConnect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include("meta.html"); ?>
        <title>Nouvelle recette</title>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Nos Recettes</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="create.php">Nouvelle</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">

            <h1>Nouvelle recette</h1>
            <form action="recette.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Recette</label>
                    <input type="text" class="form-control" name="recette" id="recette">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mots clés</label>
                    <input type="text" class="form-control"  name="motscles" id="motscles">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Graphic</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                        <p class="help-block">Scan</p>
                </div>

                <input type="submit" value="Upload" name="submit">
            </form>
        </div>
    </body>
</html>
