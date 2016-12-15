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



        <div id="header" class="col-md-12">
            <div id="logo" class="col-md-12">
                <img src="/PrototypeCam/images/flag_Witchidents_logo.png" height="100%">
            </div>

        </div>

        <!-- Het menu -->



        <nav class="navbar navbar-default " role="navigation" >

           
            <div id="menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-justified ">
                        <?php
                        foreach ($menu as $menuItem) {
                            echo" <li><a href='$menuItem[1]'>$menuItem[0]</a></li> ";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="container-fluid">  

















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

            <div id="footer">
                Dit is de footer.
            </div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>