<div class="faqs form">
<?php echo $this->Form->create('Faq'); ?>
	<fieldset>
		<legend><?php echo __('Edit Faq'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question');
		echo $this->Form->input('answer');
		echo $this->Form->input('activate');
		echo $this->Form->input('id_category');
		echo $this->Form->input('id_product');
		echo $this->Form->input('id_provider');
		echo $this->Form->input('created_id_user');
		echo $this->Form->input('modified_id_user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Faq.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Faq.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Faqs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Create User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
