<?php
	$gioithieu = $db->row("select name_$lang,photo,description_$lang from #_info where type='gioithieu' ");
	$banggia = $db->row("select photo from #_info where type='banggia' ");
?>

<div id="gioithieu" class="clearfix">
	<div class="py-3">
		<div class="title-style-1 text-left"><h2><?=$gioithieu['name_'.$lang]?></h2></div>
		<div class="row">
			<div class="col-md-6 mb-4">
				<div class="img">
					<img onerror="this.src='images/noimage.gif'" src="<?=_upload_hinhanh_l.'420x300x1/'.$gioithieu['photo']?>" alt="<?=$gioithieu['name_'.$lang]?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="details">
					<p><?=$func->catchuoi($gioithieu['description_'.$lang],700)?></p>
					<div class="w-100 text-center">
						<a class="btn btn-color" href="gioi-thieu/" title="Xem thêm">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
		<div class="title-style-1 text-left"><h2>Bảng giá tham khảo</h2></div>
		<?php /*?> <article><?=$banggia['content_'.$lang]?></article> <?php */?>
		<div class="img2">
			<img onerror="this.src='images/noimage.gif'" src="<?=_upload_hinhanh_l.$banggia['photo']?>" alt="<?=$gioithieu['name_'.$lang]?>">
		</div>
		<div class="w-100 text-center mt-3">
			<a class="btn btn-color" href="bang-gia/" title="Xem thêm">Xem thêm</a>
		</div>
	</div>
</div>