<center>
<div class="login">
<div class="title">
<br><br>
	<h1>Intranet LORTEL</h1>
	<hr class="colorgraph">
</div>
<br><br>
<div class="row">
	<div class="input-group">
		<?= $this->Form->create('User'); ?>
		<?= $this->Form->input('username', array('label'=>"Nom d'utilisateur", 'type'=> 'text', 'class'=>'form-control')); ?><br><br>
		<?= $this->Form->input('password', array('label'=>"Mot de passe", 'type'=> 'password', 'class'=>'form-control')); ?><br>
		<?= $this->Form->end(array('label'=>'Se connecter', 'class' => 'btn btn-success')); ?>
	</div>
</div>
</div>
</center>