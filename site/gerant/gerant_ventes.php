 <!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="gerant.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
  <title>Ventes</title>
</head>
<body>
  <!-- Bar de Navigation -->
  <nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="gerant_employe.php"><b>Gérant</b></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="gerant_employe.php">Liste employé</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="gerant_ventes.php">Liste ventes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_produit.php">Liste produits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_client.php">Liste clients</a>
      </li> 
    </ul>
  </div> 
</nav>
<!-- Graphique courbe -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Bénéfice(√)'],
            ['Janvier',  1000],
            ['Février',  1170],
            ['Mars',  660],
            ['Avril',  1030],
            ['Mai',  1890],
            ['Juin',  1762],
            ['Juillet',  990],
            ['Août',  1278],
            ['Septembre',  765],
            ['Octobre',  809],
            ['November',  1030],
            ['Décembre',  1623]
          ]);

          var options = {
            title: "Bénéfice sur l'année 2018",
            curveType: 'function',
            legend: { position: 'bottom' },
            animation:{
            duration: 3000,
            startup: true,
            easing:'linear'
          }
          };

          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

          chart.draw(data, options);
        }
      </script>

<!-- -->

      <div class="container shadow" id="curve_chart" style="width: 1200px; height: 400px;">
      </div>

</body>
</html>