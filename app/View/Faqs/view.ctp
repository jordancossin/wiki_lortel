<div class="faqs view">
<h2><?php echo __('Faq'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['activate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faq['Category']['name'], array('controller' => 'categories', 'action' => 'view', $faq['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faq['Product']['name'], array('controller' => 'products', 'action' => 'view', $faq['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faq['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $faq['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faq['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $faq['CreateUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($faq['Faq']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faq['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $faq['ModifyUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faq'), array('action' => 'edit', $faq['Faq']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faq'), array('action' => 'delete', $faq['Faq']['id']), array(), __('Are you sure you want to delete # %s?', $faq['Faq']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faqs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faq'), array('action' => 'add')); ?> </li>
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
