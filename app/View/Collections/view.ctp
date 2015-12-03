<div class="collections view">
<h2><?php echo __('Collection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['Request']['id'], array('controller' => 'requests', 'action' => 'view', $collection['Request']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom Rec'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['nom_rec']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Venc'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['fec_venc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Est Reca'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['est_reca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Collection'), array('action' => 'edit', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Collection'), array('action' => 'delete', $collection['Collection']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $collection['Collection']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests'), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request'), array('controller' => 'requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
