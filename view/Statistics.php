<?php
$menu = array(
    array("Home", "index.php"),
    array("Overzichten", "list.php"),
    array("Statistieken", "Statistics.php"),
    array("Gebruikers", "index.php"),
    array("Archief", "index.php")
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
     
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
    </head>

    <body>

        <div class="container-fluid">  

            <div id="header" class="row">

                <div id="logo"class="col-md-4">

                </div>
                <div id="logo" class="col-md-4">
                    <img src="/PrototypeCam/images/flag_Witchidents_logo.png" height="100%">
                </div>
                <div id="logo"class="col-md-4">

                </div>
            </div>

            <!-- Het menu -->

            <div id="menu" class="row">
                <div  class="col-md-12">

                    <div class="col-md-1">

                    </div>

                    <?php
                    foreach ($menu as $menuItem) {
                        echo" <div   class='col-md-2'>
                    <a href='$menuItem[1]'>$menuItem[0]</a>
                </div>    ";
                    }
                    ?>
                    <div class="col-md-1">

                    </div>
                </div>
            </div>

            <div id="background" class="row" >

                <div id="content" class="col-md-12" >

                    <script>
                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["Sanitair", "Voorraad", "Electrciteit", "Tuinieren", "Facilitair", "Veiligheid"],
                                datasets: [{
                                        label: 'Incidenten per categorie',
                                        data: [12, 19, 3, 5, 2, 3],
                                        backgroundColor: [
                                            '#0488A3',
                                            '#E3D6BB',
                                            '#EABB1F',
                                            '#236633',
                                            '#662C8E',
                                            '#A32822'
                                        ]

                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                </div>

            </div>

            <div id="footer">
                Dit is de footer.
            </div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>










































