<div class="documents form">
	<?php echo $this->Form->create('Document'); ?>
	<fieldset>
	<?php echo $this->Form->create('Document'); ?>
	<fieldset>
	<legend><?php echo __('Modifier le document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('file_name', array('label' => 'Nom du fichier'));
		echo $this->Form->input('file_type', array('label' => 'Type de fichier'));
		echo $this->Form->end(array('label'=>'Enregistrer les modifications', 'class' => 'btn btn-success btn-search')); 
	?>
	</fieldset>
</div>

<div class="actions">
	<h3><?php echo __('Aide'); ?></h3>
	Pour éviter tout problème de document entre votre espace personnel et d'autres utilisateur, veuillez bien indiquer vos changements......
		</li>
	</ul>
</div>