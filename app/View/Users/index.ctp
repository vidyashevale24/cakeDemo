  <h4 class="card-title">Users</h4>
  <div style="float: right;  ">
  	<?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>'btn btn-success btn-rounded btn-fw')); ?>            
  </div>
  <div class="table-responsive users index">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
           <?php echo $this->Paginator->sort('userID'); ?>
          </th>
          <th>
           <?php echo $this->Paginator->sort('fullName'); ?>
          </th>
            <th>
           <?php echo $this->Paginator->sort('username'); ?>
          </th>
          <th>
            <?php echo $this->Paginator->sort('email'); ?>
          </th>
          <th>
            <?php echo $this->Paginator->sort('mobileNo'); ?>
          </th>
          <th>
            <?php echo $this->Paginator->sort('role'); ?>
          </th> 
          <th>
           <?php echo $this->Paginator->sort('createdDate'); ?>
          </th>
          <th>
          <?php echo $this->Paginator->sort('status'); ?>
          </th>

           <th>
           <th class="actions"><?php echo __('Actions'); ?></th>
          </th>
        </tr>
      </thead>
      <tbody>
      <?php // $i=1;
		foreach ($users as $user):
		
		?>
        <tr>
          <td>       <?php echo h($user['User']['userID']); ?>&nbsp;       </td>
          <td>       <?php echo h($user['User']['fullName']); ?>&nbsp;     </td>
          <td>       <?php echo h($user['User']['username']); ?>&nbsp;     </td>
          <td> 		 <?php echo h($user['User']['email']); ?>&nbsp;     </td>
          <td> 		 <?php echo h($user['User']['mobileNo']); ?>&nbsp;     </td>
          <td> 		 <?php echo ucfirst(h($user['User']['role'])); ?>&nbsp;     </td>
          <td> 		 <?php echo h($user['User']['createdDate']); ?>&nbsp;     </td>
          <td> 		 <?php echo h($user['User']['status']); ?>&nbsp;     </td>
          <td>
         
          <td class="actions">
      			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['userID']), array('class' => 'btn btn-warning btn-rounded btn-fw')); ?> 
            <?php if(AuthComponent::user('role') == 'admin'): ?>

      			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['userID']),array('class' => 'btn btn-info btn-rounded btn-fw')); ?>
      			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['userID']), array('class' => 'btn btn-danger btn-rounded btn-fw') ,array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['userID']))); ?>
              <?php endif ?>
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
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>'btn btn-inverse-primary btn-fw')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index'),array('class'=>'btn btn-inverse-primary btn-fw')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add'),array('class'=>'btn btn-inverse-primary btn-fw')); ?> </li>
	</ul>
</div>-->
