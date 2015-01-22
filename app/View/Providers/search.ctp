<?php
$def = "index";
$dPath = $_SERVER['PHP_SELF'];
$dChunks = explode("/", $dPath);

echo $this->Html->link('Accueil',array('controller' => 'Users','action' => 'dashboard'));
echo'<span class="dynNav"> > </span>';
echo $this->Html->link('Fournisseur',array('controller' => 'Providers','action' => 'search'));
?>

<center><h2>Fournisseurs</h2>
<br><br><br><br><br><br>
<?= $this->Html->link('Ajouter un fournisseur',array('controller' => 'Providers','action' => 'add')); ?>
<p><br>
<p>Rechercher un fournisseur</p>
  <?= $this->Form->create('Provider',array('action'=>'search')); ?>
			<?= $this->Form->input('Search.name', array('label'=> 'Nom du fournisseur')); ?>
			<?= $this->Form->input('Search.tag', array('label'=> 'Mot clé')); ?>
	<?= $this->Form->end('Rechercher'); ?>

<p><br><br>

	

<p></p><br><br><br><br>


<center>
<table border ='1'>
	<thead>
		<th  align="center">Fournisseur</th>
		<th  align="center">Mot-cles</th>
		<th  align="center">Visualiser</th>
	</thead>
	<tbody>
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
				<?= $this->Html->link('Voir', array('controller' => 'Providers','action' => 'detailfrs', $provider['Provider']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</center>