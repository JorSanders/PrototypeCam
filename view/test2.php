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
                <?php printCatagory("Nieuwe meldingen", $incidentList,0); ?>
                <?php printCatagory("Bezig", $incidentList,1); ?>
                <?php printCatagory("On Hold", $incidentList,2); ?>
                <?php printCatagory("Afgerond", $incidentList,3); ?>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
<?php

function printCatagory($title, $incidentList, $priorityId) {
    ?>
    <div class="col-md-3" >
        <div class="ListCategory">
            <div class="Title"><?php echo $title; ?></div>
            <div class="BottomLine"></div>

            <?php
            foreach ($incidentList as $incident) {
                if ($incident['PriorityId'] != $priorityId) {
                    unset($incident);   
                    continue;
                }
                if ($incident['PriorityId'] === "1") {
                    $priority = "IncidentPriorityLow";
                } elseif ($incident['PriorityId'] === "2") {
                    $priority = "IncidentPriorityMedium";
                } elseif ($incident['PriorityId'] === "3") {
                    $priority = "IncidentPriorityHigh";
                } else {
                    $priority = "IncidentPriority";
                }
                ?>

                <div class= <?php echo $priority ?> >
                    <div class='IncidentTitle'><?php echo $incident['Title'] ?>
                        <table class='table' border='0'>
                            <tr>
                                <td> <?php echo $incident["Location"][0]['Description'] ?> </td>
                                <td align='right'> <?php echo $incident['DateMentioned'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class='IncidentDescription' >      
                        <table class='table' border='0'>
                            <tr>
                                <th width='25%'>Categorie:</th>
                                <td>
                                    <?php
                                    if (isset($incident['Category']['Name'])) {
                                        echo $incident['Category']['Name'];
                                    } else {
                                        echo "Onbekend";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Gemeld door:</th>
                                <td>
                                    <?php
                                    if (isset($incident['Users'][0]['Firstname'])) {
                                        echo $incident['Users'][0]['Firstname'] . "&nbsp" . $incident['Users'][0]['Surname'];
                                    } else {
                                        echo "Anoniem";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th c>Beschrijving:</th>
                                <td > <?php echo $incident['Description'] ?> </td>
                            </tr>
                            <tr>
                                <?php if (isset($incident['DateFinished'])) { ?>
                                <tr>
                                    <th>Afgerond op: </th>
                                    <td><?php echo $incident['DateFinished'] ?> </td>
                                </tr>
                            <?php } ?>
                        </table>
                        <br><br><a aria-pressed='true' class='btn btn-info btn-sm' href="./edit.php?id=<?php echo $incident['Id'] ?>">Aanpassen</a>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <?php
}
?>