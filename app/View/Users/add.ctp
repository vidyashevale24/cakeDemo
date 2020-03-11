<!-- <div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('fullName');
		echo $this->Form->input('password');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('mobileNo');
		echo $this->Form->input('role');
		echo $this->Form->input('createdDate');
		echo $this->Form->input('modifiedDate');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="col-md-9 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add User</h4>
      <?php echo $this->Form->create('User',array('class'=>'forms-sample')); ?>
        <div class="form-group row">
 	        <div class="col-sm-9">
			 <?php echo $this->Form->input('fullName', array('class' => 'form-control','placeholder'=>'Enter Full Name'));?>
	        </div>
	    </div>

	    <div class="form-group row">
 	        <div class="col-sm-9">
			 <?php echo $this->Form->input('username', array('class' => 'form-control','placeholder'=>'Enter user name'));?>
	        </div>
	    </div>
       
        <div class="form-group row">
         <div class="col-sm-9">
           <?php echo $this->Form->input('password', array('class' => 'form-control','placeholder'=>'Enter Password'));?>
          </div>
        </div>

        <div class="form-group row">
           <div class="col-sm-9">
           	<?php echo $this->Form->input('email', array('class' => 'form-control','placeholder'=>'Enter Email'));?>
		  </div>
        </div>
       
        <div class="form-group row">
          <div class="col-sm-9">
             	<?php echo $this->Form->input('mobileNo', array('class' => 'form-control','placeholder'=>'Enter Mobile Number'));?>
		   </div>
        </div>

        <div class="form-group row">
	        <div class="col-sm-9">
	          	<?php echo $this->Form->input('role', array('class' => 'form-control', 'options' => $role ));?>
			</div>
		</div>

		<div class="form-group row">
	        <div class="col-sm-9">
	          	<?php echo $this->Form->input('status', array('class' => 'form-control', 'options' => $status ));?>
			</div>
		</div>
     
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>