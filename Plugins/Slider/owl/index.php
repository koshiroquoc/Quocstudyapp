<?php 
	$Slider = $db->query("select photo_$lang as photo,name_$lang as name,link from #_photo where shows=1 and type='slider' order by number,id desc");
?>

<div id="slider" class="clearfix">
	<div class="owl-slider">
		<?php foreach ($Slider as $value): ?>
			<div class="items">
				<a rel="noreferrer" href="<?=$value['link']?>" target="_blank" title="<?=$value['name']?>">
					<img src="<?=_upload_hinhanh_l.'910x340x1/'.$value['photo']?>" alt="<?=$value['name']?>"/>
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>