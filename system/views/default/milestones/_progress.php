<div class="progress">
	<table class="progress_bar">
		<tr>
		<?php if ($milestone->ticket_count('total') == 0) { ?>
			<td class="open"><?php echo HTML::link('', $project->href('tickets') . '?status=open'); ?></td>
		<?php } else { ?>
			<?php if ($milestone->ticket_count('closed') > 0) { ?>
			<td class="closed" style="width:<?php echo $milestone->ticket_count('closed_percent'); ?>%;"><?php echo HTML::link('', $project->href('tickets') . "?milestone={$milestone->slug}&status=closed"); ?></td>
			<?php } ?>
			<?php if ($milestone->ticket_count('open') > 0) { ?>
			<td class="open" style="width:<?php echo $milestone->ticket_count('open_percent'); ?>%;"><?php echo HTML::link('', $project->href('tickets') . "?milestone={$milestone->slug}&status=open"); ?></td>
			<?php } ?>
		<?php } ?>
		</tr>
	</table>
	<span class="percent_complete"><?php echo $milestone->ticket_count('closed_percent'); ?>%</span>
	<div class="progress_info">
		<?php echo HTML::link(l('x_closed', $milestone->ticket_count('closed')), $project->href('tickets') . "?milestone={$milestone->slug}&status=allclosed"); ?>
		<?php echo HTML::link(l('x_open', $milestone->ticket_count('open')), $project->href('tickets') . "?milestone={$milestone->slug}&status=allopen"); ?>
	</div>
</div>