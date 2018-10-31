<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
  <title>Ajout employé dans l'emploi du temps</title>
</head>
<body>

  <!-- Bar de Navigation -->
  <nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="gerant_employe.php"><b>Gérant</b></a>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
    </ul>
  </div> 
</nav>

<div class="container">
  <h1 style="text-align: center" class="text-danger"><b>Remplir formulaire d'ajout:</b></h1>
</div>

<div class="container">
  <form>
    <div class="form-group row">
          <div class="form-group">
            <label>Liste des employés:</label>
          <input class="form-control" type="date" placeholder ="AAAA-MM-DD" id="example-text-input" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
          </div>
    </div>
<!-- custom-select custom-select mb-3 -->
    <div class="form-group row">
      <div class="form-group">
        <label>Liste des employés:</label>
        <select name="magasin" multiple class="form-control">
          <option value="">John SMITH</option>
          <option value="">Jolly JOHNSON</option>
          
        </select>
      </div>
    </div>
    <div class="form-group row">
      <a href="gerant_employe.php">
        <button type="submit" class="btn btn-outline-danger">Ajouter</button>
      </a>
    </div>
  </form>
</div>

</body>
</html>