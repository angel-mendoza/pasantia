<div class="collections index">
	<h2><?php echo __('Collections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('request_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nom_rec'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_venc'); ?></th>
			<th><?php echo $this->Paginator->sort('est_reca'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($collections as $collection): ?>
	<tr>
		<td><?php echo h($collection['Collection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($collection['Request']['id'], array('controller' => 'requests', 'action' => 'view', $collection['Request']['id'])); ?>
		</td>
		<td><?php echo h($collection['Collection']['nom_rec']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['fec_venc']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['est_reca']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['created']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $collection['Collection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $collection['Collection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $collection['Collection']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $collection['Collection']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Collection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requests'), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request'), array('controller' => 'requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
