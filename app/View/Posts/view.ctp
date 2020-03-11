<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('PostID'); ?></dt>
		<dd>
			<?php echo h($post['Post']['postID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PostContent'); ?></dt>
		<dd>
			<?php echo h($post['Post']['postContent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Images'); ?></dt>
		<dd>
			<?php echo h($post['Post']['images']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($post['Post']['createdBy']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($post['Post']['createdDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModifiedDate'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modifiedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo ucfirst(h($post['Post']['status'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['postID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['postID']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['postID']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
