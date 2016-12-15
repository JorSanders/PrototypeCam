<?php
$IncidentNew = array(
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "0"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "1"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "2"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "3")
);

$IncidentBusy = array(
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "0"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "1"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "2"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "3")
);

$IncidentHold = array(
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "0"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "1"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "2"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "3")
);

$IncidentDone = array(
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "0"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "1"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "2"),
    array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "3")
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




                <!-- Incidenten status: Nieuw-->
                <div class="col-md-3" >
                    <div class="ListCategory">
                        <div class="Title">
                            Nieuwe meldingen
                        </div>
                        <div class="BottomLine"></div>
                        <?php
                        foreach ($IncidentNew as $IncidentDetail) {
                            if ($IncidentDetail[5] === "1") {

                                echo "
                                <div class='IncidentPriorityLow'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "2") {
                                echo "
                                <div class='IncidentPriorityMedium'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "3") {
                                echo "
                                <div class='IncidentPriorityHigh'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } else {
                                echo "
                                <div class='IncidentPriority'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Incidenten status: BEZIG-->
                <div class="col-md-3" >
                    <div class="ListCategory">
                        <div class="Title">
                            Bezig
                        </div>
                        <div class="BottomLine"></div>
                        <?php
                        foreach ($IncidentNew as $IncidentDetail) {
                            if ($IncidentDetail[5] === "1") {

                                echo "
                                <div class='IncidentPriorityLow'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "2") {
                                echo "
                                <div class='IncidentPriorityMedium'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "3") {
                                echo "
                                <div class='IncidentPriorityHigh'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } else {
                                echo "
                                <div class='IncidentPriority'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Incidenten status: IN DE WACHT-->
                <div class="col-md-3" >
                    <div class="ListCategory">
                        <div class="Title">
                            In de wacht
                        </div>
                        <div class="BottomLine"></div>
                        <?php
                        foreach ($IncidentNew as $IncidentDetail) {
                            if ($IncidentDetail[5] === "1") {

                                echo "
                                <div class='IncidentPriorityLow'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "2") {
                                echo "
                                <div class='IncidentPriorityMedium'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "3") {
                                echo "
                                <div class='IncidentPriorityHigh'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } else {
                                echo "
                                <div class='IncidentPriority'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Incidenten status: AFGEROND-->
                <div class="col-md-3" >
                    <div class="ListCategory">
                        <div class="Title">
                            Afgerond
                        </div>
                        <div class="BottomLine"></div>
                        <?php
                        foreach ($IncidentNew as $IncidentDetail) {
                            if ($IncidentDetail[5] === "1") {

                                echo "
                                <div class='IncidentPriorityLow'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "2") {
                                echo "
                                <div class='IncidentPriorityMedium'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } elseif ($IncidentDetail[5] === "3") {
                                echo "
                                <div class='IncidentPriorityHigh'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            } else {
                                echo "
                                <div class='IncidentPriority'>
                                    <div class='IncidentTitle'>
                                        <font color='#0488A3'>$IncidentDetail[0]</font>
                                    </div>
                                    <div class='IncidentDescription'>
                                        <h4>Beschrijving: </h4>
                                        $IncidentDetail[1] 
                                        <h4>Soort Incident:</h4>
                                        $IncidentDetail[2] 
                                        <h4>Datum waarop incident is gemeld:</h4>
                                        $IncidentDetail[3] 
                       
                                    </div>
                                </div>
                                 
                             ";
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>