
<div class="title">
	<h1>Intranet LORTEL</h1>
</div>

<div class="row">
	<div class="input-group">
		<?= $this->Form->create('User'); ?>
		<?= $this->Form->input('username', array('label'=>"Nom d'utilisateur", 'type'=> 'text', 'class'=>'form-control')); ?>

		<?= $this->Form->input('password', array('label'=>"Mot de passe", 'type'=> 'text', 'class'=>'form-control')); ?>
		<?= $this->Form->end("Se connecter"); ?>
	</div>
</div>