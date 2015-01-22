<?php
$def = "index";
$dPath = $_SERVER['PHP_SELF'];
$dChunks = explode("/", $dPath);

echo $this->Html->link('Accueil',array('controller' => 'Users','action' => 'dashboard'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Catalogue',array('controller' => 'Categories','action' => 'refprod'));
?>
<p>
<div style="float:left;">
	<?= $this->Form->create('recherche'); ?>
			<?= $this->Form->input('Rechercher un produit ou une catégorie ou un fournisseur', array('label'=> "Rechercher")); ?>
	<?= $this->Form->end("Rechercher"); ?>
	<p><br>
<FORM>
<INPUT type="checkbox" name="choix1" value="1"> Catégorie<br>
<INPUT type="checkbox" name="choix2" value="2"> Produit<br>
<INPUT type="checkbox" name="choix3" value="3"> Fournisseur<br>
</FORM>
<p><br>
<ul id="menu-accordeon">
	<li><a href="#">Appareil de levage</a>
		<ul>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Palan Manuel</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Palan Electrique</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Palonniers</a></li>
		</ul>
	</li><!--
 --><li><a href="#">Appareil de manutention</a>
		<ul>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 1</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 2</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 3</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 4</a></li>
		</ul>
	</li>
	<li><a href="#">Elingue</a>
		<ul>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 1</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 2</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 3</a></li>
			<li><a href="#"><INPUT type= "radio" name="radio" value="">Lien sous menu 4</a></li>
		</ul>
	</li>
</ul>

</div>
<div style="float:right;">

	<table border ='1'> 
<tr>
	<td align="center">Catégories</td>
</tr>
<tr>
	<td><?= $this->Html->link('Palan',array('controller' => 'Providers')); ?></td>
</tr>
<tr>
	<td><?= $this->Html->link('Palan Manuel',array('controller' => 'Providers')); ?></td>
</tr>
<tr>
	<td><?= $this->Html->link('Palan Electrique',array('controller' => 'Providers')); ?></td>
</tr>
<tr>
	<td><?= $this->Html->link('Palan à levier',array('controller' => 'Providers')); ?></td>
</tr>

</table>

	<?= $this->Form->create('Post'); ?>
			<?= $this->Form->input('content', array('label'=> "Description", 'type' => 'textarea' )); ?>
	<?= $this->Form->end("Enregistrer la modification"); ?>
	<p>
	<table border ='1'> 
<tr>
	<td align="center">Fichier</td>
	<td  align="center"></td>
	<td  align="center"></td>
</tr>
<tr>
	<td>Document technique</td>
	<td><?= $this->Html->link('Modifier',array('controller' => 'Providers','action' => 'update')); ?></td>
	<td><?= $this->Html->link('Supprimer',array('controller' => 'Providers','action' => 'delete')); ?></td>
</tr>
<tr>
	<td>Liste des palans</td>
	<td><?= $this->Html->link('Modifier',array('controller' => 'Providers','action' => 'update')); ?></td>
	<td><?= $this->Html->link('Supprimer',array('controller' => 'Providers','action' => 'delete')); ?></td>
</tr></center>
<tr>
	<td>Tarif palan lortel 2014</td>
	<td><?= $this->Html->link('Modifier',array('controller' => 'Providers','action' => 'update')); ?></td>
	<td><?= $this->Html->link('Supprimer',array('controller' => 'Providers','action' => 'delete')); ?></td>
</tr>
<tr>
	<td>Document lortel 2015</td>
	<td><?= $this->Html->link('Modifier',array('controller' => 'Providers','action' => 'update')); ?></td>
	<td><?= $this->Html->link('Supprimer',array('controller' => 'Providers','action' => 'delete')); ?></td>
</tr>

</table>
<p><?= $this->Html->link('Ajouter un document',array('controller' => 'Providers','action' => 'add')); ?><p><br>
<p>
<br>
<h2>Liste des produits</h2>
<p>
<br>
<table border ='1'> 
<tr>
	<td align="center">Référence</td>
	<td  align="center">Produit</td>
	<td  align="center">Catégorie</td>
	<td  align="center">Fournisseur</td>
	<td  align="center">Visualiser</td>
</tr>
<tr>
	<td>az</td>
	<td><?= $this->Html->link('Palan',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('Manuel',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('FRS',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('Voir le produit',array('controller' => 'Categories','action' => 'descprod')); ?></td>
</tr>
<tr>
	<td>az-1</td>
	<td><?= $this->Html->link('Palan',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('à levier',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('FRS',array('controller' => 'Providers',)); ?></td>
	<td><?= $this->Html->link('Voir le produit',array('controller' => 'Categories','action' => 'descprod')); ?></td>
</tr></center>
<tr>
	<td>az-2</td>
	<td><?= $this->Html->link('Palan',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('électrique',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('FRS',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('Voir le produit',array('controller' => 'Categories','action' => 'descprod')); ?></td>
</tr>
<tr>
	<td>az-3</td>
	<td><?= $this->Html->link('Palan',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('électrique',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('FRS',array('controller' => 'Providers')); ?></td>
	<td><?= $this->Html->link('Voir le produit',array('controller' => 'Categories','action' => 'descprod')); ?></td>
</tr>
</table>

</div>