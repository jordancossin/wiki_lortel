<div class="pictures index">
	<h2><?php echo __('Pictures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('file_type'); ?></th>
			<th><?php echo $this->Paginator->sort('activate'); ?></th>
			<th><?php echo $this->Paginator->sort('id_provider'); ?></th>
			<th><?php echo $this->Paginator->sort('id_product'); ?></th>
			<th><?php echo $this->Paginator->sort('id_category'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_id_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_id_user'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pictures as $picture): ?>
	<tr>
		<td><?php echo h($picture['Picture']['id']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['name']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['file_name']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['file_type']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['activate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picture['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $picture['Provider']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($picture['Product']['name'], array('controller' => 'products', 'action' => 'view', $picture['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($picture['Category']['name'], array('controller' => 'categories', 'action' => 'view', $picture['Category']['id'])); ?>
		</td>
		<td><?php echo h($picture['Picture']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picture['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $picture['CreateUser']['id'])); ?>
		</td>
		<td><?php echo h($picture['Picture']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picture['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $picture['ModifyUser']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $picture['Picture']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $picture['Picture']['id']), array(), __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Create User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
