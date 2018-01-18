<?php
$r = __DIR__;
require_once($r . '\dbConnect.php');

$result = $mysqli->query("SELECT * FROM recette");

$mysqli->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include("meta.html"); ?>
        <title>Nos Recettes</title>
    </head>

    <body>
        <div class="container">
            <?php include("navbar.html"); ?>

            <h3>Chercher les recettes</h3>
            <form action="results.php" method="post" enctype="application/x-www-form-urlencoded" name="query" target="top">
                <label>Keyword:&nbsp;</label>
                <input name="r" type="text" size="60" />
                <input name="Search" type="submit" class="bg-primary" value="Go..." />
            </form>
            <hr>
                <div>
                    <ul class="list-group">
                        <?php
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            ?>
                            <li class="list-group-item"><?php echo $row['name']; ?></li>
                            <?php } ?>
                    </ul>
                </div>
        </div>
    </body>
    <?php
    $result->close();
    ?>
</html>