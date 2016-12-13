<!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
        <script src="../javascript/javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="/PrototypeCam/style/style.css">
        <meta charset="UTF-8">
        <?php
        $IncidentAssigned = array(
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

        $IncidentMine = array(
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "0"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "1"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "2"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25", "3")
        );
        ?>
        <title>Persoonlijk overzicht</title>
    </head>
    <body>
        <div class="Page">
            <?php
            require_once("menu.php");
            ?>
            <div class="Content">
                <div class="MenuCategory">
                    <a href='list.php'><div class="TitleCetegory">Algemeen</div></a>
                    <a href='ListPersonal.php'><div class="TitleCetegory">Persoonlijk</div></a>
                </div>
                <div class="ListCatagory">
                    <div class="Title">
                        Mijn toegewezen incidenten
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentAssigned as $IncidentDetail) {
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
                        Mijn afgeronde incidenten
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

                <div class="ListCatagory">
                    <div class="Title">
                        Mijn gemelde incidenten
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentMine as $IncidentDetail) {
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
