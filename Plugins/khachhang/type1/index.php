<?php
	$db->bindMore(array("shows"=>1,"type"=>"khachhang"));
	$khachhang  =  $db->query("select name_$lang,id,slug,thumb,datecreate,photo,description_$lang from #_post where shows=:shows and type=:type order by number,id desc");
?>

<div id="khachhang">
	<div class="title-style-1">
		<span>Khách hàng</span>
		<h2> NÓI GÌ VỀ CHÚNG TÔI</h2>
	</div>

	<div class="kh_item">
		<div id="sync2" class="owl-carousel owl-theme">
			<?php foreach ($khachhang as $key => $value) { ?>
				<div class="item">
					<img src="<?=_upload_post_l.$value['thumb']?>" alt="<?=$value['name_'.$lang]?>">
				</div>
			<?php } ?>		
		</div>
		<div id="sync1" class="owl-carousel owl-theme">
			<?php foreach ($khachhang as $key => $value) { ?>
				<div class="item">
					<img src="images/phay.png" alt="<?=$value['name_'.$lang]?>">
					<h3><?=$value['name_'.$lang]?></h3>
					<span>Nhân viên</span>
					<p><?=$func->catchuoi($value['description_'.$lang],200)?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>