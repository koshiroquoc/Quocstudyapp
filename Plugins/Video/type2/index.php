<?php
	$video = $db->query("select name_$lang,link,photo from #_video where shows=1 and type='video' order by number,id desc");
?>

<div id="boxVideo" class="clearfix">
	<div class="owl-video">
		<?php foreach ($video as $value) {?>
			<div class="video">
				<div class="play-icon">
					<a href="https://www.youtube.com/embed/<?=$func->youtobi($value['link']);?>" data-fancybox="video">
						<img src="<?=_upload_video_l.'255x180x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>">
					</a>
				</div>
			</div>
		<?php }?>
	</div>
</div>