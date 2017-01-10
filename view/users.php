<?php
$User = array(
    array("1", "Jor Sanders", "jor.sanders@hotmail.com", "25-11-2016", "26-22-2016"),
    array("2", "Marit Besseling", "marit.besseling@hotmail.com", "25-11-2016", "X"),
    array("3", "Tessa Scheuder", "tessa.scheuder@hotmail.com", "25-11-2016", "X"),
    array("4", "Lennard Peerenboom", "lennard.peerenboom@hotmail.com", "25-11-2016", "28-12-2016")
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

        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
        <script src="../js/incidentAnimation.js"></script>

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

                <div id="table">
                    <table  class="table table-sriped table-bordered table-hover table-responsive table-curved " >
                        <tr>
                            <th>#</th>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Datum aangemaakt</th>
                            <th>Datum afgemaakt</th>
                        </tr>
                        <?php
                            foreach ($User as $user) {
                                echo" <tr>
                                        <td>$user[0]</td>
                                        <td>$user[1]</td>
                                        <td>$user[2]</td>
                                        <td>$user[3]</td>
                                        <td>$user[4]</td>
                                    </tr> 
                                ";
                            }   
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>