<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate'); ?></dt>
		<dd>
			<?php echo h($category['Category']['activate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['CreatedUser']['id'], array('controller' => 'users', 'action' => 'view', $category['CreatedUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ModifiedUser']['id'], array('controller' => 'users', 'action' => 'view', $category['ModifiedUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pictures'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documents'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>

	<?php if (!empty($category['Products'])): ?>
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
	<?php foreach ($category['Products'] as $products): ?>
		<tr>
			<td><?php echo $products['id']; ?></td>
			<td><?php echo $products['name']; ?></td>
			<td><?php echo $products['reference']; ?></td>
			<td><?php echo $products['description']; ?></td>
			<td><?php echo $products['activate']; ?></td>
			<td><?php echo $products['id_category']; ?></td>
			<td><?php echo $products['created']; ?></td>
			<td><?php echo $products['created_id_user']; ?></td>
			<td><?php echo $products['modified']; ?></td>
			<td><?php echo $products['modified_id_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $products['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $products['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $products['id']), array(), __('Are you sure you want to delete # %s?', $products['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pictures'); ?></h3>
	<?php if (!empty($category['Pictures'])): ?>
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
	<?php foreach ($category['Pictures'] as $pictures): ?>
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
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($category['Documents'])): ?>
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
	<?php foreach ($category['Documents'] as $documents): ?>
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
