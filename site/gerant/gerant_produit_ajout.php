<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	<title>Ajout produit</title>
</head>
<body>
	<!-- Bar de Navigation -->
	<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="gerant_employe.php"><b>Gérant</b></a>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
  </div> 
</nav>


<div class="container">
  <div class="form-group">
      <label>Libelle :</label>
      <input type="text" class="form-control" name="">
  </div>

  <div class="form-group">
      <label>Nom :</label>
      <input type="text" class="form-control" name="">
  </div>

  <div class="form-group">
    <label>Description :</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>

  <div class="form-group">
      <label>Marque :</label>
      <input type="text" class="form-control" name="">
  </div>

  <a href="gerant_produit.php"><button type="submit" class="btn btn-outline-dark">Ajouter Produit</button></a>
</div>


</body>
</html>