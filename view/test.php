<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();

$incidentList = $incidentController->selectAllIncidents();

echo "<pre>";
print_r($incidentList);
echo "</pre>";

foreach ($incidentList as $incident) {
    echo "$incident[Title]";

    echo"<br><br>";

    if (isset($incident["Location"])) {
        foreach ($incident['Location'] as $location) {
            echo"$location[Type]: $location[Description] <br>";
        }
    }

    echo"<br>";

    echo"$incident[DateMentioned]";

    echo"<br><br>";

    if (isset($incident["Category"])) {
        echo $incident["Category"]["Name"];
    }

    echo"<br><br>";

    if (isset($incident["Users"])) {
        echo $incident['Users'][0]['Firstname'] . "&nbsp" . $incident['Users'][0]['Surname'];
    }

    echo"<br><br>";

    echo"$incident[Description]";

    echo"<br><br>";

    if (isset($incident["DateFinished"])) {
        echo "$incident[DateFinished]";
    }
}


echo "
    <div class='IncidentPriority'>
        <div class='IncidentTitle'>
             &nbsp; $incident[Title]
               <table class='table' border='0'>
                    <tr>
                        <td>" . $incident["Location"][0]["Description"] . "</td>
                        <td align='right'> $incident[DateMentioned]</td>
                    </tr>
                </table>
        </div>

        <div class='IncidentDescription' >      
            <table class='table' border='0'>
                <tr>
                    <th width='25%'>Catergorie:</th>
                    <td>" . $incident["Category"]["Name"] . "</td>
                </tr>

                <tr>
                    <th>Gemeld door:</th>
                    <td>";
if (isset($incident["Users"])) {
    echo $incident['Users'][0]['Firstname'] . "&nbsp" . $incident['Users'][0]['Surname'];
}
echo " </td>
                </tr>

                <tr>
                    <th c>Beschrijving:</th>
                    <td >$incident[Description]</td>
                </tr>

                <tr>";
if (isset($incident['DateFinished'])) {
    echo "<tr>
                    <th>Afgerond op: </th>
                    <td>$incident[DateFinished] </td>
                    </tr>";
    }               
            echo"</table>
        </div>
    </div>
    ";

    