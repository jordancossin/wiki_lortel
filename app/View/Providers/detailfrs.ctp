<?php
$def = "index";
$dPath = $_SERVER['PHP_SELF'];
$dChunks = explode("/", $dPath);

echo $this->Html->link('Accueil',array('controller' => 'Users','action' => 'dashboard'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Fournisseur',array('controller' => 'Providers','action' => 'search'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Détail Fournisseur',array('controller' => 'Providers','action' => 'detailfrs'));
?>

<center><div style="float:right;">
<?= $this->Html->link('Voir tous les produits de ce fournisseur',array('controller' => 'Categories','action' => 'refprod')); ?>
<p><br><br><br><?= $this->Html->link('Ajouter un Mot clé',array('controller' => 'Providers','action' => 'add')); ?>
</div>

	<?= h($provider['Provider']['name']); ?>
	<?= $this->Form->create('detailfrs'); ?>
			<?= $this->Form->input('Content.description', array('label'=> "Description", 'type' => 'textarea', 'value' => $provider['Provider']['description'] )); ?>
	<?= $this->Form->end("Enregistrer la modification"); ?>
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
<p><?= $this->Html->link('Ajouter un document',array('controller' => 'Providers','action' => 'add')); ?></center>