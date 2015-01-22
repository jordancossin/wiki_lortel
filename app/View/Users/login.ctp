<p><br><br><br><center><div id="lortel"> 
  <h1>Intranet LORTEL</i></h1>
</div></center></p>
<div class="content">
	<div class="title">Connexion</div>
		<center><?php	echo $this->Form->create('User'); 
				echo  $this->Form->input('username', array('label'=> "Nom d'utilisateur")); 
				echo  $this->Form->input('password', array('label'=> "Mot de passe")); 
			echo  $this->Form->end("Se connecter"); 
?></center>
</div>