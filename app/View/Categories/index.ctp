<?php
$affichageZone1 = false; // Affichage liste des catégories
$affichageZone2 = false; // Affichage liste des produits
$affichageZone3 = false; // Affichage description de la catégorie + liste de ses documents
$affichageMenuCategories = false; // Affichage du menu des catégories

if(isset($categories) && !empty($categories))
{
	$affichageZone1 = true;
}

if(isset($products) && !empty($products))
{
	$affichageZone2 = true;
}

if(isset($infoCategory) && !empty($infoCategory))
{
	$affichageZone3 = true;
}

if(isset($menuCategories) && !empty($menuCategories))
{
	$affichageMenuCategories = true;
}

// $this->request->data['Documents']; // récupere du menu déroulant les données documents de la catégorie sur laquelle on a cliqué
// $infoCategory; // affiche la description le nom de la catégorie  sur laquelle on a cliqué
// $products; // permet d'afficher un tableau avec la reference le produit  la catégorie et le fournisseur par la barre de recherche
// $categories; // permet d'afficher la liste des catégories de la recherche
?>


<div class="row">
	<ol class="breadcrumb">
	  <li><?= $this->Html->link('<I class="fa fa-home fa-2x"></i>',array('controller' => 'Dashboard'), array('escape'=>false)); ?></li>
	  <i class="fa fa-arrow-right"></i>
	  <li class="active">Catalogue</li>
	</ol>
</div>
<div class="row">
	<div class="col-md-5">
		<div class="left">
			<fieldset>
				<legend><i class="fa fa-search"></i> Rechercher des catégories/produits</legend>
				<?= $this->Form->create('Category',array('action'=>'index')); ?>
					<?= $this->Form->input('Search.name', array('label'=> 'Catégorie/produit')); ?>
				<?= $this->Form->end(array('label'=>'Rechercher', 'class' => 'btn btn-success btn-search')); ?>
			</fieldset>
		</div>
		<p><br>
		<ul class="navigation">
			<?php
				if($affichageMenuCategories)
				{
					$sousCategories = $menuCategories;
					foreach ($menuCategories as $categoryPrincipale)
					{ 
						if(empty($categoryPrincipale['Category']['id_category_parent']))
						{
							echo '<li class="">
									'.$this->Html->link($categoryPrincipale['Category']['name'], array('controller' => 'Categories','action' => 'index', 0, $categoryPrincipale['Category']['id']));
							getSousMenu($sousCategories, $categoryPrincipale['Category']['id'], $this);
							'</li>';
						}
					}
				}
			?>
		</ul>	
	</div>
	<div class="col-md-7">
		<div class="right"> 
			<!-- Affichage zone 3 - info d'une catégorie -> liste des documents de la catégorie -->
			<?php
			if($affichageZone3)
			{
			?>
				<fieldset>
					<legend><i class="fa fa-file"></i> Categorie</legend>
					<?php echo $this->Form->create('Category', array('class','row'));
						  echo $this->Form->input('id');
						  echo $this->Form->input(' name', array('label' => 'Nom',  'disabled'=>'disabled', 'value' => $infoCategory['Category']['name']));
						 echo $this->Form->input('description', array('label' => 'Description', 'disabled'=>'disabled', 'value' => $infoCategory['Category']['description']));
						 echo $this->Form->end(array('label'=>'Enregistrer', 'class' => 'btn btn-success btn-search'));
					?>
				</fieldset>
			<?php
					echo '<fieldset>
						<legend><i class="fa fa-file"></i> Document</legend>
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
									echo '<tr>
											<td>
												'.h($document['name']).'
											</td>
											<td>
												'.$this->Html->link('<i class="fa fa-chevron-circle-right"></i> Modifier', array('controller' => 'Documents','action' => '.', $document['id']), array('class' => 'btn btn-danger', 'escape'=>false)).'
											</td>
											<td>
												'.$this->Html->link('<i class="fa fa-chevron-circle-right"></i> Supprimer', array('controller' => 'Documents','action' => '.', $document['id']), array('class' => 'btn btn-danger', 'escape'=>false)).'
											</td>
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
							
						echo '</tbody>
					</table>';
			
						if(isset($infoCategory) && !empty($infoCategory))
						{
							echo $this->Html->link('<i class="fa fa-chevron-circle-right"></i>  Ajouter un document', array('controller' => 'Documents','action' => 'add', $infoCategory['Category']['id']), array('class' => 'btn btn-primary', 'escape'=>false)); 
						}
					echo '</fieldset>';
			?>
			<br>
			<?php
			}
			?>
			<br><br>
			<?php 
				// Affichage liste des catégories
				if($affichageZone1)
				{					
					if(!isset($categories) && empty($categories))
					{
						echo 'Aucune catégorie à afficher';
					}
					else
					{
						echo
						'<fieldset>
						<legend><i class="fa fa-table"></i> Categories</legend>
							<table cellpadding="0" cellspacing="0">
							<thead>
							</thead>
							<tbody>';
							foreach ($categories as $category){
								echo 
								'<tr>
									<td>'.$category['Category']['name'].'</td>
								</tr>';
							}
							echo 
							'</tbody>
							</table>
						</fieldset>';
					}
				}
			?>
			<br><br>
			<?php
				// Affichage liste des produits
				if($affichageZone2)
				{
					if(!isset($products) && empty($products))
					{
						echo 'Aucun produit à afficher';
					}
					else
					{
						echo 
						'<fieldset>
						<legend><i class="fa fa-table"></i> Produits</legend>
							<table cellpadding="0" cellspacing="0">
							<thead>
							<tr>
								<th>reference</th>
								<th>produit</th>
								<th>categorie</th>
								<th>fournisseur</th>
								<th></th>
							</tr>
							</thead>
							<tbody>';
							foreach ($products as $product){
								echo
							   '<tr>
								<td>'.$product['Products']['reference'].'</td>
								<td>'.$product['Products']['name'].'</td>
								<td>'.$product['Category']['name'].'</td>		
								<td>';
								$lstProvider = '';
								foreach ($product['Provider'] as $provider)
								{
									$lstProvider .= $provider['name'].', ';
								}
								echo h(substr($lstProvider, 0, strlen($lstProvider)-2));
							   '</td>';
								echo '<td>'.$this->Html->link('<i class="fa fa-chevron-circle-right"></i> Voir le produit', array('controller' => 'Products', 'action' => 'edit', $product['Products']['id']), array('class' => 'btn btn-danger', 'escape'=>false)).'</td>
								</tr>';
							} 
							echo '</tbody>
							</table>
						</fieldset>';
					}
				}
			?>
		</div>
	</div>
</div>

<?php
	function getSousMenu($listeCategories, $idCategorie, $context){
		foreach ($listeCategories as $sousCat){
			if($sousCat['Category']['id_category_parent'] == $idCategorie)
			{
				echo '<ul class="">
						<li>
						'.$context->Html->link($sousCat['Category']['name'], array('controller' => 'Categories','action' => 'index', 0, $sousCat['Category']['id']));
				getSousMenu($listeCategories,'<p>'.$sousCat['Category']['id'], $context);
				echo '</ul>';
				echo '</li>';
				echo '</li>';
			}
		}
	}
?>