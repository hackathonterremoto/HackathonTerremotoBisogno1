<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
                if(AuthComponent::user('role_id') == 1) {
                    echo $this->Form->input('role_id', array(
                        'type' => 'select', 
                        'options' => array(
                            '1' => 'admin',
                            '2' => 'organizzazione, richiedente',
                            '3' => 'utente, offerente'
                            ) 
                        )
                    );

                    echo $this->Form->input('active'); 
                    
                }
		echo $this->Form->input('provincia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
	</ul>
</div>
