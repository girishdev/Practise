<?php
	$rss_feed = simplexml_load_file("http://phppot.com/feed/");
		if(!empty($rss_feed)) {
			$i=0;
			foreach ($rss_feed->channel->item as $feed_item) {
				if($i>=10) break;
?>
				<div>
					<a class="feed_title" href="<?php $num = $i+1; echo $feed_item->link; /**/?>"><?php echo $num.').'.$feed_item->title; /**/?></a>
				</div>
				<div>
					<?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; /**/?>
				</div>
				<?php		
				$i++;	
			}
		}
?>
<table class="rss-table">
	<tbody>
		<tr>
			<th><strong>PhpPot RSS Feed</strong></th>
		</tr>
		<?php //Loop starts for iterating feed item array ?>
		<tr>
			<td valign="top">
				<div>
					<a class="feed_title" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a>
				</div>
				<div>
					<?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?>
				</div>
			</td>
		</tr>
		<?php // Loop ends ?>
	</tbody>
</table>