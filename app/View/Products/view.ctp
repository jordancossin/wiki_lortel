<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($product['Product']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($product['Product']['activate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $product['CreateUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $product['ModifyUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Create User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documents'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pictures'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faqs'), array('controller' => 'faqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faqs'), array('controller' => 'faqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($product['Documents'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('File Type'); ?></th>
		<th><?php echo __('Id Provider'); ?></th>
		<th><?php echo __('Id Product'); ?></th>
		<th><?php echo __('Id Category'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created Id User'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified Id User'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Documents'] as $documents): ?>
		<tr>
			<td><?php echo $documents['id']; ?></td>
			<td><?php echo $documents['name']; ?></td>
			<td><?php echo $documents['file_name']; ?></td>
			<td><?php echo $documents['file_type']; ?></td>
			<td><?php echo $documents['id_provider']; ?></td>
			<td><?php echo $documents['id_product']; ?></td>
			<td><?php echo $documents['id_category']; ?></td>
			<td><?php echo $documents['created']; ?></td>
			<td><?php echo $documents['created_id_user']; ?></td>
			<td><?php echo $documents['modified']; ?></td>
			<td><?php echo $documents['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $documents['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $documents['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $documents['id']), array(), __('Are you sure you want to delete # %s?', $documents['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documents'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pictures'); ?></h3>
	<?php if (!empty($product['Pictures'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('File Type'); ?></th>
		<th><?php echo __('Activate'); ?></th>
		<th><?php echo __('Id Provider'); ?></th>
		<th><?php echo __('Id Product'); ?></th>
		<th><?php echo __('Id Category'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created Id User'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified Id User'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Pictures'] as $pictures): ?>
		<tr>
			<td><?php echo $pictures['id']; ?></td>
			<td><?php echo $pictures['name']; ?></td>
			<td><?php echo $pictures['file_name']; ?></td>
			<td><?php echo $pictures['file_type']; ?></td>
			<td><?php echo $pictures['activate']; ?></td>
			<td><?php echo $pictures['id_provider']; ?></td>
			<td><?php echo $pictures['id_product']; ?></td>
			<td><?php echo $pictures['id_category']; ?></td>
			<td><?php echo $pictures['created']; ?></td>
			<td><?php echo $pictures['created_id_user']; ?></td>
			<td><?php echo $pictures['modified']; ?></td>
			<td><?php echo $pictures['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pictures', 'action' => 'view', $pictures['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pictures', 'action' => 'edit', $pictures['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pictures', 'action' => 'delete', $pictures['id']), array(), __('Are you sure you want to delete # %s?', $pictures['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pictures'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Faqs'); ?></h3>
	<?php if (!empty($product['Faqs'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th><?php echo __('Activate'); ?></th>
		<th><?php echo __('Id Category'); ?></th>
		<th><?php echo __('Id Product'); ?></th>
		<th><?php echo __('Id Provider'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created Id User'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified Id User'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Faqs'] as $faqs): ?>
		<tr>
			<td><?php echo $faqs['id']; ?></td>
			<td><?php echo $faqs['question']; ?></td>
			<td><?php echo $faqs['answer']; ?></td>
			<td><?php echo $faqs['activate']; ?></td>
			<td><?php echo $faqs['id_category']; ?></td>
			<td><?php echo $faqs['id_product']; ?></td>
			<td><?php echo $faqs['id_provider']; ?></td>
			<td><?php echo $faqs['created']; ?></td>
			<td><?php echo $faqs['created_id_user']; ?></td>
			<td><?php echo $faqs['modified']; ?></td>
			<td><?php echo $faqs['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'faqs', 'action' => 'view', $faqs['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'faqs', 'action' => 'edit', $faqs['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'faqs', 'action' => 'delete', $faqs['id']), array(), __('Are you sure you want to delete # %s?', $faqs['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Faqs'), array('controller' => 'faqs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Providers'); ?></h3>
	<?php if (!empty($product['Provider'])): ?>
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
	<?php foreach ($product['Provider'] as $provider): ?>
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
