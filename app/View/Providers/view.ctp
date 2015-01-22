<div class="providers view">
<h2><?php echo __('Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['activate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($provider['CreateUser']['id'], array('controller' => 'users', 'action' => 'view', $provider['CreateUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($provider['ModifyUser']['id'], array('controller' => 'users', 'action' => 'view', $provider['ModifyUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $provider['Provider']['id']), array(), __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($provider['Documents'])): ?>
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
	<?php foreach ($provider['Documents'] as $documents): ?>
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
	<?php if (!empty($provider['Pictures'])): ?>
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
	<?php foreach ($provider['Pictures'] as $pictures): ?>
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
	<?php if (!empty($provider['Faqs'])): ?>
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
	<?php foreach ($provider['Faqs'] as $faqs): ?>
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
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($provider['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Activate'); ?></th>
		<th><?php echo __('Id Category'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created Id User'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified Id User'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provider['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['reference']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['activate']; ?></td>
			<td><?php echo $product['id_category']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['created_id_user']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($provider['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Activate'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provider['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td><?php echo $tag['activate']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), array(), __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
