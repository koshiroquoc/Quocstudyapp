<?php
	$db->bindMore(array("type"=>'visaochon',"shows"=>1));
	$visaochon = $db->query("select name_$lang,icon,description_$lang from #_post where shows=:shows and type=:type order by number,datecreate desc");
?>

<div id="chonchungtoi" class="clearfix">
	<div class="container">
		<div class="title-style-1 clearfix">
			<h2><span>LÝ DO CHỌN</span> SUNNY ENGLISH MQA</h2>
		</div>

		<div class="owl-chonchungtoi">
			<?php foreach ($visaochon as $k => $value){?>
				<?=$k%2==0 ? '<div class="group">' : ''  ?>
				<div class="chonchungtoi mb-3">
					<div class="img">
						<img src="<?=_upload_post_l.'62x62x1/'.$value['icon']?>" alt="<?=$value['name_'.$lang]?>">
					</div>
					<div class="details">
						<h3><?=$value['name_'.$lang]?></h3>
						<p><?=$func->catchuoi($value['description_'.$lang],300)?></p>
					</div>
				</div>
				<?=($k%2!=0)||($k%2==0 && $k==(count($visaochon)-1))? '</div>':''?>
			<?php }?>
		</div>
	</div>
</div>