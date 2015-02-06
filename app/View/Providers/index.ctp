
<div class="row">
	<ol class="breadcrumb">
	   <li><?= $this->Html->link('<I class="fa fa-home fa-2x"></i>',array('controller' => 'Dashboard'), array('escape'=>false)); ?></li>
	  <i class="fa fa-arrow-right"></i>
	  <li class="active">Fournisseurs</li>
	</ol>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="right">
			<?php echo $this->Html->link(__('<i class="fa fa-user-plus"></i> Ajouter un fournisseur'), 
			array('action' => 'add'), 
				array('class' => 'btn btn-primary', 'escape'=>false)); ?>
		</div>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-6">
		<fieldset>
			<legend><i class="fa fa-search"></i> Rechercher un fournisseur</legend>
			<?= $this->Form->create('Provider',array('action'=>'index')); ?>
				<?= $this->Form->input('Search.name', array('label'=> 'Nom du fournisseur')); ?>
				<?= $this->Form->input('Search.tag', array('label'=> 'Mot clé')); ?>
			<?= $this->Form->end(array('label'=>'Rechercher', 'class' => 'btn btn-success btn-search')); ?>
		</fieldset>
	</div>

	<div class="col-md-6">
		<fieldset>
			<legend><i class="fa fa-table"></i> Fournisseurs</legend>
				<table border="0"  class="table table-hover">
					<thead>
						<th  align="center"> Fournisseur</th>
						<th  align="center">Mots clés</th>
						<th  align="center"></th>
					</thead>
					<tbody id="myTable">
						<?php foreach ($providers as $provider): ?> 
						<tr>
							<td>
								<?php echo h($provider['Provider']['name']); ?>
							</td>
							<td>
								<?php
									$lstTags = '';
									foreach ($provider['Tag'] as $tag){
										$lstTags .= $tag['name'].', ';
									}
									echo h(substr($lstTags, 0, strlen($lstTags)-2));
								?>
							</td>
							<td>
								<?= $this->Html->link('<i class="fa fa-chevron-circle-right"></i> Voir le fournisseur', array('controller' => 'Providers','action' => 'edit', $provider['Provider']['id']),array('class' => 'btn btn-danger', 'escape'=>false)); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<ul class="pagination pagination-lg pager" id="myPager"></ul>
		</legend>
	</div>
</div>