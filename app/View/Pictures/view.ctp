<div class="pictures view">
<h2><?php echo __('Picture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Type'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['file_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['activate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $picture['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['Product']['name'], array('controller' => 'products', 'action' => 'view', $picture['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['Category']['name'], array('controller' => 'categories', 'action' => 'view', $picture['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $picture['CreateUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $picture['ModifyUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Picture'), array('action' => 'edit', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Picture'), array('action' => 'delete', $picture['Picture']['id']), array(), __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?> </li>
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
