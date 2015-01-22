
<ol class="breadcrumb">
  <li><?= $this->Html->link('Accueil',array('controller' => 'Dashboard')); ?></li>
  <li><?= $this->Html->link('Fournisseurs',array('controller' => 'Providers', 'action' => 'index')); ?></li>
  <li class="active">Ajouter un fournisseur</li>
</ol>

<div class="providers form">
<?php echo $this->Form->create('Provider'); ?>
	<fieldset>
		<legend><i class="fa fa-user-plus"></i> Ajouter un fournisseur</legend>
	<?php
		echo $this->Form->input('name', array('label'=> 'Nom'));
		echo $this->Form->input('description', array('label'=> 'Description'));
		echo $this->Form->input('Product', array('label'=> 'Produits'));
		echo $this->Form->input('Tag', array('label'=> 'Mots clés'));
	?>
	</fieldset>
	<?= $this->Form->end(array('label'=>'Ajouter', 'class' => 'btn btn-success btn-search')); ?>
</div>