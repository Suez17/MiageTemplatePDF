
<?php

require("debut.php");

?>

<h3 align="center">Formulaire maquette diplome</h3>
<br/>

<form class="form-horizontal" role="form" method="post" action='formulaire_maquette_diplome.php'>
    
	
	 <div class="form-group">
    <label class="control-label col-sm-2">Type filiere:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="type" id="type" placeholder="Entrez le type de la filiere">
    </div>
	</div>

	 <div class="form-group">
    <label class="control-label col-sm-2">Url maquette:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="url_maquette" id="url_maquette" placeholder="Entrez l'url de la maquette">
    </div>
	</div>

	 <div class="form-group">
    <label class="control-label col-sm-2">Semestre:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="semestre" id="semestre" placeholder="Entrez le semestre">
    </div>
	</div>
	
	 <div class="form-group">
    <label class="control-label col-sm-2">Code Ec:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="code_ec" id="code_ec" placeholder="Entrez un code ec">
    </div>
	</div>
	
  <div class="form-group">
  <label class="control-label col-sm-2">Intitule Ec:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="intitule_ec" id="intitule_ec" placeholder="Entrez un intitule ec">
    </div>
	</div>

	 <div class="form-group">
    <label class="control-label col-sm-2">Code Ue:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="code_ue" id="code_ue" placeholder="Entrez un code ue">
    </div>
	</div>
	
  <div class="form-group">
  <label class="control-label col-sm-2">Intitule Ue:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="intitule_ue" id="intitule_ue" placeholder="Entrez un intitule ue">
    </div>
	</div>
  
  <div class="form-group">
  <label class="control-label col-sm-2">Heure CM:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="heure_cm" id="heure_cm" placeholder="Entrez l'heure cm">
    </div>
	</div>

  <div class="form-group">
  <label class="control-label col-sm-2">Heure TD:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="heure_td" id="heure_td" placeholder="Entrez l'heure td">
    </div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-sm-2">ECTS:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="ects" id="ects" placeholder="Entrez les ects">
    </div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-sm-2">Totaux ECTS:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="totaux_ects" id="totaux_ects" placeholder="Entrez les totaux ects">
    </div>
	</div>

	<div class="form-group">
	<label class="control-label col-sm-2">Totaux CM:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="totaux_cm" id="totaux_cl" placeholder="Entrez les totaux cm">
    </div>
	</div>

	<div class="form-group">
	<label class="control-label col-sm-2">Photo de la maquette:</label> <!-- Pour que le label soit a cote de l'input -->
    <div class="col-sm-3">	<!-- pour la longueur de l'input -->
      <input class="form-control" value="" name="photo_maquette" id="photo_maquette" placeholder="Entrez le lien de la photo de la maquette">
    </div>
	</div>
  	
  	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10" style="margin-bottom:10px">
	      <button name="connexion" type="submit" class="btn btn-primary "> Valider</button>
	      <button type="reset" class="btn btn-danger"> Effacer</button>
	    </div>
	</div>
	<br><br>
</form>


