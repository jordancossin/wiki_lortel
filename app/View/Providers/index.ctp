<div class="providers index">
	<h2><?php echo __('Providers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('activate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_id_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_id_user'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($providers as $provider): ?>
	<tr>
		<td><?php echo h($provider['Provider']['id']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['name']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['description']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['activate']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provider['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $provider['CreateUser']['id'])); ?>
		</td>
		<td><?php echo h($provider['Provider']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provider['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $provider['ModifyUser']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $provider['Provider']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $provider['Provider']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $provider['Provider']['id']), array(), __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Create User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documents'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pictures'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faqs'), array('controller' => 'faqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faqs'), array('controller' => 'faqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
