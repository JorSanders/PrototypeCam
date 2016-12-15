<?php
$menu = array(
    array("Home", "index.php"),
    array("Overzichten", "list.php"),
    array("Statistieken", "index.php"),
    array("Gebruikers", "index.php"),
    array("Archief", "index.php")
);
?>

<!DOCTYPE html>
<html lang="nl">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        <title> Witchidents </title>

        <!-- Bootstrap -->
        <link href="/PrototypeCam/library/Bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="/PrototypeCam/library/Bootstrap/font-awesome.min.css" rel="stylesheet">
        <link href="../style/Style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
     
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
    </head>

    <body>



 








        <!-- De header + Menu -->
        <?php
        include 'Menu.php';
        ?>











            <div id="background" class="row" >

                <div id="content" class="col-md-12" >

                    <!--   content<br>
                       <div class="col-md-3" >
                           a-test div 3 kolommen breed
                       </div>
                       <div class="col-md-3" >
                           b-test div  kolommen breed
                       </div>
                       <div class="col-md-3" >
                           c-test div  kolommen breed
                       </div>
                       <div class="col-md-3" >
                           D-test div 3 kolommen breed
                       </div>-->
                </div>

            </div>



        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>