<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <title>Incident melden</title>
    </head>
    <body>
        <div class="Page">
            <?php
            require_once("menu.php");
            ?>
            <div class="Content">
                <div id="Centered" >
                    <form action="" method="POST">
                        <input class="InputItem" type="text" placeholder="Onderwerp"> <br>
                        <input class="InputItem" type="text" placeholder="locatie"> <br>
                        <input class="InputItem" type="text" placeholder="beschrijving"> <br>
                        <input class="InputItem" type="file" placeholder="upload foto"> <br>
                        <input class="InputItem" type="text" placeholder="email"> <br>
                        <input class="InputItem" type="submit">
                    </form>
                    
                </div> 
            </div>
    </body>
</html>
