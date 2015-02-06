<div class="documents form">
	<?php echo $this->Form->create('Document'); ?>
	<fieldset>
	<?php echo $this->Form->create('Document'); ?>
	<fieldset>
	<legend><?php echo __('Revoir les informations du document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('file_name', array('label' => 'Nom du fichier',  'disabled'=>'disabled'));
		echo $this->Form->input('file_type', array('label' => 'Type de fichier',  'disabled'=>'disabled'));
		echo $this->Form->input('id_provider', array('label' => 'Id du fournisseur',  'disabled'=>'disabled'));
		echo $this->Form->input('id_product', array('label' => 'Id du produit',  'disabled'=>'disabled'));
		echo $this->Form->input('id_category', array('label' => 'Id de la catégorie',  'disabled'=>'disabled'));
		echo $this->Form->input('created_id_user');
		echo $this->Form->input('modified_id_user');
	?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
		  <br><?php echo $this->Form->postLink(__('Supprimer'),
			array(
			'action' => 'Supprimer',
			$this->Form->value('Document.id')), 
			array(), __('Êtes-vous sûre de bien vouloir supprimer ce document de votre espace personnel # %s?', $this->Form->value('Document.id'))); 
			
			// Rajouter la suppression automatique dans son espace personnel
		 ?>
		</li>
	</ul>
</div>