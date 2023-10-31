<?php
    $doitac = $db->query("select link,photo_$lang,name_$lang from #_photo where shows=1 and type='doitac' order by number,id desc");
?>

<div id="doitac">
	<div class="owl-doitac">
		<?php foreach ($doitac as $key => $value): ?>
			<div class="li">
				<a rel="noreferrer" href="<?=$value['link'];?>" title="<?=$value['name_'.$lang]?>" target="_blank">
					<img src="<?=_upload_hinhanh_l.'150x80x2/'.$value['photo_'.$lang]?>" alt="<?=$value['name_'.$lang]?>"/>
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>