<div class="row">
	<ol class="breadcrumb">
	  <li><?= $this->Html->link('Accueil',array('controller' => 'Dashboard')); ?></li>
	  <li><?= $this->Html->link('Fournisseurs',array('controller' => 'Providers', 'action' => 'index')); ?></li>
	  <li class="active"><?php if(isset($this->request->data['Provider']['name'])){echo $this->request->data['Provider']['name'];} ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="right">
			<?php echo $this->Html->link(__('<i class="fa fa-chevron-circle-right"></i> Voir tous les produits de ce fournisseur'), 
											array('controller' => 'Products', 'action' => 'add'), 
											array('class' => 'btn btn-primary', 'escape'=>false)); ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<fieldset>
			<legend><i class="fa fa-users"></i> <?php if(isset($this->request->data['Provider']['name'])){echo $this->request->data['Provider']['name'];} ?></legend>
			<?php echo $this->Form->create('Provider', array('class','row')); ?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name', array('label' => 'Nom'));
				echo $this->Form->input('description', array('label' => 'Description'));
			?>
			<?= $this->Form->end(array('label'=>'Enregistrer les modifications', 'class' => 'btn btn-success btn-search')); ?>
		</fieldset>

		<fieldset>
			<legend><i class="fa fa-file"></i> Documents</legend>
		</fieldset>
	</div>
	<div class="col-md-4">
		<fieldset>
			<legend><i class="fa fa-tags"></i> Mots clés</legend>

			<?= $this->Form->create('Provider',array('action'=>'index')); ?>
				<?= $this->Form->input('Add.tag.name', array('label'=> 'Ajouter un mot clé')); ?>
			<?= $this->Form->end(array('label'=>'Ajouter', 'class' => 'btn btn-success btn-search')); ?>

			<ul class="list-unstyled">
			<?php
				foreach($tags as $key => $value){
					echo '<li><a href="Prodivders/edit/'.$key.'"><i class="fa fa-trash del-tag"></i></a> '.$value.'</li>';
				}
			?>
			</ul>
		</fieldset>
	</div>

	
</div>
