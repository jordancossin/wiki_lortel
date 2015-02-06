<div class="documents form">
<?php echo $this->Form->create('Document'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter un document '); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('file_name', array('type' => 'file'));
		echo $this->Form->input('file_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Aide'); ?></h3>
	<ul>
		<h4>Pour ajouter un document, veuillez entrer tous les renseignements mise à votre disposition (Nom, réference et type du document à renseigner obligatoirement ).
		<br>
		Puis cliquer sur la pièce jointe pour ajouter votre document souhaité.</h4>
		<br>
		<h3>
		<?php echo __('Exemple : '); ?>
		</h3>
			<br>Palan,
			<br> C-21,
			<br>Palan.pdf.
	</ul>
