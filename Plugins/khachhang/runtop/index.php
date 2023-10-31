<?php
	$khachhang = $db->query("select name_$lang,photo,description_$lang from #_post where shows=1 and type='khachhang' order by number,id desc");
?>

<div id="customer">
	<div class="container">
		<div class="title-style-1 clearfix">
			<h2>Cảm nhận học viên</h2>
		</div>

		<div class="simplyscroll-kh">
			<?php foreach ($khachhang as $key => $value) {?>
				<div class="customer">
					<div class="img">
						<img src="<?=_upload_post_l.'120x120x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
					</div>
					<div class="details">
						<h3><?=$value['name_'.$lang]?></h3>
						<p>"<?=$func->catchuoi($value['description_'.$lang],200)?>"</p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>