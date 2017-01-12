<!DOCTYPE html>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";
$incidentController = new IncidentController();

$incident = $incidentController->getIncidentById($_GET['id']);

$valid = true;
if (isset($_GET["Title"])) {
    $title = $_GET["Title"];
} else {
    $title = $incident["Title"];
    $valid = false;
}
if (isset($_GET["LocationDescription"])) {
    $locationDescription = $_GET["LocationDescription"];
} else {
    $locationDescription = $incident["Location"][0]["Description"];
    $valid = false;
}
if (isset($_GET["Description"])) {
    $description = $_GET["Description"];
} else {
    $description = $incident["Description"];
    $valid = false;
}
if (isset($_GET["StatusId"])) {
    $status = $_GET["StatusId"];
} else {
    $status = $incident["Status"][0]["NameId"];
    $valid = false;
}

if ($valid) {
    $properties = $_GET;
    $incidentController->updateIncident($properties, $incident["Id"]);
    //header("location: list.php");
}
?>
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
        include 'Menu.php';
        ?>
        <div id="background" class="row" >
            <div id="content" class="col-md-12" >
                <div class="col-md-4" >
                    <p><h4>Welkom bij Witchidents,</h4></p>
                    <p>Het incidentmeldings systeem van Witchworld.<br> Hier kunt u al uw problemen kwijt.</p>
                    <p>Hier kunt u een al bestaande melding aanpassen.</p>
                </div>
                <div class="col-md-4" id="NewReport">
                    <!-- Het meldingsformulier -->
                    <form action="" method="GET">
                        Onderwerp
                        <input required class="form-control input-sm" type="text" placeholder="Onderwerp" name="Title" value="<?php echo $title; ?>"> <br>
                        Status<br>
                        <select name="StatusId">
                            <option value=1>In de wacht</option>
                            <option value=2>Bezig</option>
                            <option value=3>Afgerond</option>
                        </select>
                        <br>
                        Locatie
                        <input required class="form-control input-sm" type="text" placeholder="Locatie" name="LocationDescription" value="<?php echo $locationDescription; ?>"> <br>
                        <input class="form-control input-sm" type="hidden" placeholder="Locatie" name="LocationId" value=1>
                        <input class="form-control input-sm" type="hidden" placeholder="Locatie" name="id" value=<?php echo $_GET['id']; ?>>
                        Beschrijving
                        <textarea required rows=10 cols=50 class="form-control input-sm" type="text" placeholder="Beschrijving" name="Description"><?php echo $description; ?></textarea> <br><br>

                        <input class="btn btn-default btn-sm" type="submit">
                    </form>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>