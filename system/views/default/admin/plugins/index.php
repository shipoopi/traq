<div class="content">
	<h3 class="list_title"><?php echo l('enabled_plugins'); ?></h3>
</div>
<div>
	<?php View::render('admin/plugins/_list', array('plugins' => $plugins['enabled'])); ?>
</div>
<hr />
<div class="content">
	<h3 class="list_title"><?php echo l('disabled_plugins'); ?></h3>
</div>
<div>
	<?php View::render('admin/plugins/_list', array('plugins' => $plugins['disabled'])); ?>
</div>