<div class="tags view">
<h2><?php echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['activate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array(), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Providers'); ?></h3>
	<?php if (!empty($tag['Provider'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Activate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created Id User'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified Id User'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tag['Provider'] as $provider): ?>
		<tr>
			<td><?php echo $provider['id']; ?></td>
			<td><?php echo $provider['name']; ?></td>
			<td><?php echo $provider['description']; ?></td>
			<td><?php echo $provider['activate']; ?></td>
			<td><?php echo $provider['created']; ?></td>
			<td><?php echo $provider['created_id_user']; ?></td>
			<td><?php echo $provider['modified']; ?></td>
			<td><?php echo $provider['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'providers', 'action' => 'view', $provider['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'providers', 'action' => 'edit', $provider['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'providers', 'action' => 'delete', $provider['id']), array(), __('Are you sure you want to delete # %s?', $provider['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
