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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

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


                    <div class="col-md-1" >
                        a-test div 1 kolommen breed
                    </div>
                    <div class="col-md-11" >
                        b-test div 11 kolommen breed
                        
                        
                        
                        
                        <!--Test statistiek met bootstrap 
                        
                        <canvas id="myChart" width="500" height="250"></canvas>

                  <script>
                      var ctx = document.getElementById("myChart");
                      var myChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                              datasets: [{
                                      label: '# of Votes',
                                      data: [12, 19, 3, 5, 2, 3],
                                      backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)'
                                      ],
                                      borderColor: [
                                          'rgba(255,99,132,1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'
                                      ],
                                      borderWidth: 1
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
                  </script>-->
                    </div>

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