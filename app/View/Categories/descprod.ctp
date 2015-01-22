<?php
$def = "index";
$dPath = $_SERVER['PHP_SELF'];
$dChunks = explode("/", $dPath);

echo $this->Html->link('Accueil',array('controller' => 'Users','action' => 'dashboard'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Catalogue',array('controller' => 'Categories','action' => 'refprod'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Produit',array('controller' => 'Categories','action' => 'descprod'));
?>

	<?= $this->Form->create('Post'); ?>
			<?= $this->Form->input('content', array('label'=> "Description", 'type' => 'textarea' )); ?>
	<?= $this->Form->end("Enregistrer la modification"); ?>
	<p>
	<table border ='1'> 
<tr>
	<td align="center">Fichier</td>
	<td  align="center">Modification</td>
	<td  align="center">Suppression</td>
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


<div style="float:right;"><?= $this->Html->link('Ajouter un fournisseur',array('controller' => 'Providers','action' => 'add')); ?></div><p><br>

<p><br><br>
<div style="margin: 5px 15px 0px 5px; text-align: justify; float:center;" id="faqs">
<h3 >Questions fréquemment posées (FAQ)</h3><center><a href="#" onClick="faq_toggle_all('block')"><small>Tout afficher</small></a> | <a href="#" onClick="faq_toggle_all('none')"><small>Tout masquer</small></a> </center>
<h4>&amp;#9658; Pourquoi ne faut-il pas avoir peur ?</h4><?= $this->Form->end("Répondre"); ?>
<p>La peur est l'ennemie du Bien.<br /><br />
Pour que le Bien vous accompagne dans votre vie, <a href="http://erwinmayer.com/kamashanti">faites un don</a>.
</p>
<br />
<h4>&amp;#9658; Comment puis-je obtenir la rédemption ?</h4><?= $this->Form->end("Répondre"); ?>
<p><a href="http://erwinmayer.com/kamashanti">Faites un don</a>. Remercier le Bien est la source de tout salut.</p>
<br />
<h4>&amp;#9658; J'ai déjà donné, mais je n'ai pas l'impression que le Bien est avec moi, que puis-je faire ?</h4><?= $this->Form->end("Répondre"); ?>
<p>Il ne faut pas perdre la foi ! Peut-être votre générosité n'est pas à la hauteur du Bien que vous attendez. <a href="http://erwinmayer.com/kamashanti">Ouvrez votre coeur</a>.</p>
<br />
<h4>&amp;#9658; Je ne trouve pas réponse à ma question, que faire ?</h4><?= $this->Form->end("Répondre"); ?>
<p><a href="http://erwinmayer.com/kamashanti">Donner !</a>. Les réponses sont transcendantes lorsque l'on est allégé des fardeaux de la vie.</p>
</div>
<br />
<br />



