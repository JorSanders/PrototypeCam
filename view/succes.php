<?php
Require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";
$incidentController = new IncidentController();
$incidentList = $incidentController->selectAllIncidents();
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
                

                    <div class="ListCategory">
                        <div class="Title">Nieuwe meldingen</div>
                        <div class="BottomLine"></div>

                        <?php
                        foreach ($incidentList as $incident) {
                            if ($incident ['Status'][0]['NameId'] === "1") {
                                if ($incident['PriorityId'] === "1") {
                                    echo "
                                        <div class='IncidentPriorityLow'>
                                            <div class='IncidentTitle'>&nbsp; $incident[Title]
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
                                                                        <br><br><a aria-pressed='true' class='btn btn-info btn-sm' href='./edit.php'> Aanpassen</a>
                                                                </div>
                                                            </div>
                                                        ";
                                } elseif ($incident['PriorityId'] === "2") {
                                    echo "
                                                            <div class='IncidentPriorityMedium'>
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
                                            <br><br><a aria-pressed='true' class='btn btn-info btn-sm' href='./edit.php'> Aanpassen</a>
                                            </div>
                                        </div>
                                    ";
                                } elseif ($incident['PriorityId'] === "3") {
                                    echo "
                                            <div class='IncidentPriorityHigh'>
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
                                                    <br><br><a aria-pressed='true' class='btn btn-info btn-sm' href='./edit.php'> Aanpassen</a>
                                                </div>
                                            </div>
                                        ";
                                } else {
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
                                                                <td>";
                                    if (isset($incident["Category"]["Name"])) {
                                        echo $incident["Category"]["Name"];
                                    }
                                    echo "</td> 
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
                                                        <br><br><a aria-pressed='true' class='btn btn-info btn-sm' href='./edit.php'> Aanpassen</a>
                                                    </div>
                                                    </div>
                                                
                                            ";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
