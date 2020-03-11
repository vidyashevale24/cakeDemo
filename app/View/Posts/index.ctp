<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('postID'); ?></th>
			<th><?php echo $this->Paginator->sort('postContent'); ?></th>
			<th><?php echo $this->Paginator->sort('images'); ?></th>
			<th><?php echo $this->Paginator->sort('createdBy'); ?></th>
			<th><?php echo $this->Paginator->sort('createdDate'); ?></th>
			<th><?php echo $this->Paginator->sort('modifiedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['postID']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['postContent']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['images']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['createdBy']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['createdDate']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modifiedDate']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['postID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['postID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['postID']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['postID']))); ?>
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
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
	</ul>
</div>
