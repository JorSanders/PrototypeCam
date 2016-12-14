<!DOCTYPE HTML>
<html>

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/PrototypeCam/style/style.css">
        <meta charset="UTF-8">
    </head>

    <body>
        <div class="Page">
            <?php
            require_once("menu.php");
            ?>
            <div class="Content">
                <div class="Statistic">
                    <canvas id="myChart" width="500" height="250"></canvas>

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
        </div>
    </body>
</html