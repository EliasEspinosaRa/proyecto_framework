<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="shortcut icon" href="image\favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Meraki/Admin</title>
</head>
<body>
    <?php
        include_once ('templates/header2.php');
    ?>
</body>
<header>
<!Barras de pastel -->
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Activida', 'Cantidad'],
          ['Ventas',     11],
          ['Devoluciones',      6],
          ['Productos',  5],
        ]);

        var options = {
          title: 'Actividades',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" 
    style="
    width: 620px; 
    height: 360px; 
    margin: auto; 
    border-radius: 5px; 
    border: 1px solid #a8a8a8; 
    position: absolute; 
    top: 50%;
    left: 7%; 
    transform: translate(-10%, -65%);"></div>
  </body>
</header>
<!Barras laterales -->
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Año', 'Ventas', 'Devoluciones', 'Productos'],
          ['2018', 1000, 400, 200],
          ['2019', 1170, 460, 250],
          ['2020', 660, 1120, 300],
          ['2021', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Tienda ACB',
            subtitle: 'Estaditicas de ventas 2018-2021',
          },
          bars: 'Vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="
    width: 620px; 
    height: 360px; 
    margin: auto; 
    border-radius: 5px; 
    border: 1px solid #a8a8a8; 
    position: absolute; 
    top: 50%;
    left: 50%; 
    transform: translate(-0%, -65%);">
    "></div>
  </body>
</html>