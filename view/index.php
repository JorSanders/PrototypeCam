<?php
$menu = array(
    array("Home", "index.php"),
    array("Overzichten", "list.php"),
    array("Statistieken", "statistics.php"),
    array("Gebruikers", "users.php"),
    array("Archief", "archive.php")
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
        require_once($_SERVER["DOCUMENT_ROOT"] . "/prototypeCAM/includes/menu.php");
        ?>

        <div id="background" class="row" >

            <div id="content" class="col-md-12" >

                <div class="col-md-4" >
                    <p><h4>Welkom bij Witchidents,</h4></p>

                    <p>Het incidentmeldings systeem van Witchworld.<br>
                        Hier kunt u al uw problemen kwijt.</p>

                    <p>(vul hier extra tekst bij)</p>
                </div>
                <div class="col-md-4" id="NewReport">
                    <br><br><br><br> 
                    <!-- Het meldingsformulier -->
                    <form action="" method="POST">
                        Onderwerp
                        <input class="form-control input-sm" type="text" placeholder="Onderwerp"> <br>
                        Locatie
                        <input class="form-control input-sm" type="text" placeholder="Locatie"> <br>
                        Beschrijving
                        <input class="form-control input-sm" type="text" placeholder="Beschrijving"> <br>
                        Foto
                        <input class="form-control input-sm" type="file" placeholder="Upload foto"> <br>
                        Email
                        <input class="form-control input-sm" type="text" placeholder="Email"> <br>
                        <input class="btn btn-default btn-sm" type="submit">
                    </form>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs hidden-md" >
                    <br><br>
                    <img src="/PrototypeCam/images/288510033.png" alt="Witchworld Schild" style="width:360px;height:399px;">
                </div>

            </div>

        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>