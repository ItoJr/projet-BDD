<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	<title></title>
</head>
<body>
	<!-- Deco en-tête -->
	<div class="jumbotron text-center">
  		<h1>Connection</h1>
  		<p class="text-primary"><b>Employé</b></p> 
	</div>

	<form>
		<!-- Login -->
		<div class="form-group">
    		<label for="username">Login</label>
   		 	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer nom d'utilisateur">
    		
  		</div>

  		<!-- Password-->
 		<div class="form-group">
    		<label for="exampleInputPassword1">Mot de passe</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  		</div>

  		<div class="form-group">
  			<select name="magasin" class="custom-select custom-select  mb-3">
  				<option selected>Liste magasins</option>
  				<option value="">Carrefour</option>
  				<option value="">Auchan</option>
  				<option value="">Boulanger</option>
  			</select>
  		</div>

  		 <button type="submit" class="btn btn-primary">Se connecter</button>

	</form>

	<a href="index.php">
		<button type="submit" class="btn btn-warning">Retour</button>
	</a>
</body>
</html>