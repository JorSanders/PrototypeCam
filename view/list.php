<!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
        <script src="../javascript/javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="/PrototypeCam/style/style.css">
        <meta charset="UTF-8">
        <?php
        $IncidentNew = array(
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25"),
            array("Wc is kapot", "De Wc tegenover kamer 2.18 is vandaag kapot gegaan en spoelt niet meer door.", "sanitair", "25-11-2016", "25")
        );

        $IncidentBusy = array(
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
                        array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
                        array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23"),
            array("Het gras is kapot", "De grasmat in de ingang is kapot gegaan", "landschap", "23-11-2016", "23")
            
        );

        $IncidentHold = array(
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            array("Wc papier is op", "In de wc tegenover 1.20 heeft geen wc papier meer.", "voorraad", "25-11-2016", "20"),
            
        );

        $IncidentDone = array(
            array("Ik wil een nieuwe bezem", "Mijn bezem is kapot en ik wil een nieuwe krijgen want anders kan ik mijn werk niet doen.", "Voorraad", "25-11-2016", "13-12-2016"),
            array("Ik wil een nieuwe bezem", "Mijn bezem is kapot en ik wil een nieuwe krijgen want anders kan ik mijn werk niet doen.", "Voorraad", "25-11-2016", "13-12-2016"),
            array("Ik wil een nieuwe bezem", "Mijn bezem is kapot en ik wil een nieuwe krijgen want anders kan ik mijn werk niet doen.", "Voorraad", "25-11-2016", "13-12-2016"),
            array("Ik wil een nieuwe bezem", "Mijn bezem is kapot en ik wil een nieuwe krijgen want anders kan ik mijn werk niet doen.", "Voorraad", "25-11-2016", "13-12-2016"),
            array("Ik wil een nieuwe bezem", "Mijn bezem is kapot en ik wil een nieuwe krijgen want anders kan ik mijn werk niet doen.", "Voorraad", "25-11-2016", "13-12-2016")
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
                    ?>
                </div>
                <div class="ListCatagory">
                    <div class="Title">
                        Bezig
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentBusy as $IncidentDetail) {
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
                    ?>
                </div>
                
                <div class="ListCatagory">
                    <div class="Title">
                        In de wacht
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentHold as $IncidentDetail) {
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
                    ?>
                </div>

                <div class="ListCatagory">
                    <div class="Title">
                        Afgerond
                    </div>
                    <div class="BottomLine"></div>
                    <?php
                    foreach ($IncidentDone as $IncidentDetail) {
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
                                        <h4>Datum waarop incident is afgehandeld:</h4>
                                        $IncidentDetail[4]
                       
                                    </div>
                                </div>
                                 
                             ";
                    }
                    ?>
                </div>

            </div>
        </div>
    </body>
</html>
