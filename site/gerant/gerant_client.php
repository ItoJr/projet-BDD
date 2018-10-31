<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
  <title>Liste clients</title>
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
        <a class="nav-link" href="gerant_ventes.php">Liste ventes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_produit.php">Liste produits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="gerant_client.php">Liste clients</a>
      </li> 
    </ul>
  </div> 
</nav>

<form>
 <div class="input-group mb-3">
   <input type="text" class="form-control" placeholder="Nom/Prénom/Adresse/Num/Email" id="input">
 </div>
</form>

<div class="container">
  <table class="table shadow-lg">
    <thead class="thead-light">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Sexe</th>
        <th>Numéro Tel</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="table">
       <tr>
        <td>1</td>
        <td>Black</td>
        <td>Dan</td>
        <td>Homme</td>
        <td>0799882298</td>
        <td>7 avenue blablabla</td>
        <td>Marseille</td>
        <td>black.dan@gmail.com</td>
       </tr>
      </tr>

      <tr>
        <td>2</td>
        <td>White</td>
        <td>Juliette</td>
        <td>Femme</td>
        <td>0799765298</td>
        <td>place trojojoj</td>
        <td>Rennes</td>
        <td>white.ju@outlook.com</td>
       </tr>
      </tr>
    </tbody>
  </table>
</div>

<!-- Pour la recherche de client -->
<script>
$(document).ready(function(){
  $("#input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>