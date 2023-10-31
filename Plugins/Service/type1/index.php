<?php 
	$db->bindMore(array("type"=>'dao-tao',"shows"=>1,"highlight"=>1));
	$daotao = $db->query("select slug,name_$lang,photo,description_$lang from #_post where shows=:shows and type=:type and highlight=:highlight order by number,id desc");
?>

<div class="boxKh">
	<div class="title-style-1 clearfix">
		<p><?=$Setting["slogan_$lang"]?></p>
		<h2>CÁC KHÓA HỌC ĐÀO TẠO</h2>
	</div>

	<div class="container">
		<div class="owl-kh">
			<?php foreach ($daotao as $key => $value): ?>
				<div class="items">
					<div class="img">
						<a class="imghv d-block" href="dao-tao/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
							<img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'250x250x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>" />
						</a>
					</div>
					<div class="details">
						<h3><a href="dao-tao/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>
						<p><?=$func->catchuoi($value['description_'.$lang],200)?></p>
					</div>
				</div>
		<?php endforeach ?>
		</div>
	</div>
</div>