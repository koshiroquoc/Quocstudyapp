<?php
	$post = $db->query("select name_$lang,slug,photo,description_$lang from #_post where shows=1 and type='tintuc' and highlight=1 order by number,id desc");
?>

<div id="boxNews">
	<div class="title-style-1 clearfix">
		<h2>Tin tức</h2>
	</div>
	<ul class="simplyscroll_post ul">
		<?php foreach ($post as $value) {?>
			<li class="news">
				<div class="img">
					<a class="imghv d-block" href="tin-tuc/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
						<img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'175x125x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>
					</a>
				</div>
				<div class="details">
					<h3><a href="tin-tuc/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>
					<p><?=$func->catchuoi($value['description_'.$lang],90)?></p>
					<a class="readmore" href="tin-tuc/<?=$value['slug']?>" title="Xem tiếp">Xem tiếp</a>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>