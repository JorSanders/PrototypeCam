<!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
        <script src="../javascript/javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="/PrototypeCam/style/style.css">
        <meta charset="UTF-8">
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
        <title>Overzicht</title>
    </head>
    <body>
        <div class="Page">
<?php
require_once("menu.php");
?>
            <div class="Content">
                <div class="ListCatagory">
                    <div class="Title">
                        Nieuwe meldingen
                    </div>
                    <div class="BottomLine"></div>
<?php
foreach ($IncidentNew as $IncidentDetail) {
    if ($IncidentDetail[5] === "1") {

        echo "
                                <div class='IncidentItem1'>
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
                                <div class='IncidentItem2'>
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
                                <div class='IncidentItem3'>
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
                                <div class='IncidentItem'>
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
                <div class="ListCatagory">
                    <div class="Title">
                        Bezig
                    </div>
                    <div class="BottomLine"></div>
<?php
foreach ($IncidentBusy as $IncidentDetail) {
    if ($IncidentDetail[5] === "1") {

        echo "
                                <div class='IncidentItem1'>
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
                                <div class='IncidentItem2'>
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
                                <div class='IncidentItem3'>
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
                                <div class='IncidentItem'>
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

                <div class="ListCatagory">
                    <div class="Title">
                        In de wacht
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentHold as $IncidentDetail) {
                        if ($IncidentDetail[5] === "1") {

                            echo "
                                <div class='IncidentItem1'>
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
                                <div class='IncidentItem2'>
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
                                <div class='IncidentItem3'>
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
                                <div class='IncidentItem'>
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

                <div class="ListCatagory">
                    <div class="Title">
                        Afgerond
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentDone as $IncidentDetail) {
                        if ($IncidentDetail[5] === "1") {

                            echo "
                                <div class='IncidentItem1'>
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
                                <div class='IncidentItem2'>
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
                                <div class='IncidentItem3'>
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
                                <div class='IncidentItem'>
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
    </body>
</html>
