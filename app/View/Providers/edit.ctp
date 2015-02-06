<div class="row">
	<ol class="breadcrumb">
	  <li><?= $this->Html->link('<I class="fa fa-home fa-2x"></i>',array('controller' => 'Dashboard'), array('escape'=>false)); ?></li>
	  <i class="fa fa-arrow-right"></i>
	  <li><?= $this->Html->link('Fournisseurs',array('controller' => 'Providers', 'action' => 'index')); ?></li>
	  <i class="fa fa-arrow-right"></i>
	  <li class="active"><?php if(isset($this->request->data['Provider']['name'])){echo $this->request->data['Provider']['name'];} ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="right">
			<?php echo $this->Html->link(__('<i class="fa fa-chevron-circle-right"></i> Voir tous les produits de ce fournisseur'), 
											array('controller' => 'Categories', 'action' => 'index', $this->request->data['Provider']['id'] ), 
											array('class' => 'btn btn-primary', 'escape'=>false)); ?>
		</div>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-8">
		<fieldset>
			<legend><i class="fa fa-users"></i> 
			<?php if(isset($this->request->data['Provider']['name']))
			{
				echo $this->request->data['Provider']['name'];
			} 
			?>
			</legend>
			<?php echo $this->Form->create('Provider', array('class' => 'row')); 
				  echo $this->Form->input('id');
				  echo $this->Form->input('name', array('label' => 'Nom',  'disabled'=>'disabled'));
				  echo $this->Form->input('description', array('label' => 'Description'));
				  echo $this->Form->end(array('label' => 'Modifier', 'class' => 'btn btn-success btn-search'));
			?>
		</fieldset>
		<table border="0"  class="table table-hover">
			<thead>
				<th><?php echo $this->Paginator->sort('question'); ?></th>
				<th><?php echo $this->Paginator->sort('answer'); ?></th>
				<th  align="center"></th>
				<th  align="center"></th>
			</thead>
			<tbody id="myTable">
				<?php
					if(!empty($this->request->data['Faqs']))
					{
						foreach ($this->request->data['Faqs'] as $faq)
						{
							echo '<tr>
									<td>
										'.$faq['question'].'
									</td>
									<td>
										'.$faq['answer'].'
									</td>
									<td>';
										echo $this->Html->link('<i class="fa fa-chevron-circle-right"></i> Modifier', array('controller' => 'Faqs','action' => 'edit', $faq['id']), array('class' => 'btn btn-success', 'escape'=>false)).
									'</td>
									<td>';
										echo $this->Form->postLink(__('<i class="fa fa-trash"></i> Supprimer'), array('controller' => 'Faqs','action' => 'delete', $faq['id']), array('class' => 'btn btn-danger', 'escape'=>false), __('Êtes-vous sûre de bien vouloir supprimer cette FAQ # %s?', $faq['id'])).
									'</td>
								</tr>';
						}
					}
					else
					{
						echo '<tr>
								<td>
									Aucun document pour ce produit.
								</td>
							</tr>';
					}
				?>
			</tbody>
		</table>
		<ul class="pagination pagination-lg pager" id="myPager"></ul>
		<br>
		<fieldset>
				<legend>
					<i class="fa fa-question-circle"></i> Avez-vous besoin d'une FAQ ?
				</legend>
					<?php 
						echo $this->Form->create('Faq', array('class' => 'row', 'controller' => 'Faqs', 'action' => 'add')); 
						echo $this->Form->input('question', array('label'=> 'Votre question'));
						echo $this->Form->input('answer', array('label'=> 'Votre réponse'));
						echo $this->Form->hidden('id_provider', array('value'=> $this->request->data['Provider']['id']));
						echo $this->Form->hidden('activate', array('value'=> 1));
						echo $this->Form->end(array('label'=>'Enregistrer', 'class' => 'btn btn-success btn-search'));								
					?>
		</fieldset>
	</div>
	<div class="col-md-4">
		<fieldset>
			<legend><i class="fa fa-tags"></i> Mots clés</legend>
			<?= $this->Form->create('Provider',array('action'=>'index')); ?>
				<?= $this->Form->input('Add.tag.name', array('label'=> 'Ajouter un mot clé')); ?>
			<?= $this->Form->end(array('label'=>'Ajouter', 'class' => 'btn btn-success btn-search')); ?>
		</fieldset>
		<fieldset>
			<legend><i class="fa fa-table"></i> Documents</legend>
			<?php
			echo '<fieldset>
					<table border="0">
						<thead>
							<th  align="center">Documents</th>
							<th  align="center"></th>
							<th  align="center"></th>
						</thead>
						<tbody>';
						if(!empty($this->request->data['Documents']))
						{
							foreach ($this->request->data['Documents'] as $document)
							{
								echo 
								'<tr>
									<td>
										'.h($document['name']).'
									</td>
									<td>
										'.$this->Html->link('<i class="fa fa-chevron-circle-right"></i> Modifier', array('controller' => 'Documents','action' => 'view', $document['id']), array('class' => 'btn btn-success', 'escape'=>false)).'
									</td>
									<td>
									'.$this->Form->postLink(__('<i class="fa fa-trash"></i> Supprimer'), array('controller' => 'Documents','action' => 'delete', $document['id']), array('class' => 'btn btn-danger', 'escape'=>false), __('Êtes-vous sûre de bien vouloir supprimer cette FAQ # %s?', $document['id'])).
									'</td>
								</tr>';
							}
						}
						else
						{
							echo 
							'<tr>
								<td>
									Aucun document pour ce fournisseur.
								</td>
							</tr>';
						}
						echo '</tbody>
					</table>';
					echo '</fieldset>';
		
				echo $this->Html->link('<i class="fa fa-chevron-circle-right"></i> Ajouter un document', array('controller' => 'Documents','action' => 'add'),array('class' => 'btn btn-primary', 'escape'=>false)); 
			
			?>
		</fieldset>
	</div>

	
</div>
