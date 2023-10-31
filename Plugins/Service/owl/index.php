<?php 
	$db->bindMore(array("type"=>'dichvu',"shows"=>1,"highlight"=>1));
	$dichvu = $db->query("select slug,name_$lang,photo,description_$lang from #_post where shows=:shows and type=:type and highlight=:highlight order by number,id desc");
?>

<div class="boxDv">
	<div class="title-style-1 clearfix">
		<p><?=$Setting["slogan_$lang"]?></p>
		<h2>Dịch vụ của chúng tôi</h2>
	</div>

	<div class="container">
		<div class="owl-Dv">
			<?php foreach ($dichvu as $key => $value): ?>
				<div class="items">
					<div class="img">
						<a class="imghv d-block" href="dich-vu/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
							<img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'250x250x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>" />
						</a>
					</div>
					<div class="details">
						<h3><a href="dich-vu/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>
						<p><?=$func->catchuoi($value['description_'.$lang],200)?></p>
					</div>
				</div>
		<?php endforeach ?>
		</div>
	</div>
</div>