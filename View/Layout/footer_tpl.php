<?php
	$db->bindMore(array("type"=>"footer"));
	$footer = $db->row("select content_$lang from #_info where type=:type ");
?>

<div id="footer">
	<div class="footer py-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="thongtin_ft">
						<h5><?=$Setting["name_$lang"]?></h5>
						<?=$thongtin_ft->html();?>
						<?=$mangxh->html();?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pr-lg-5">
					<h6>Bản đồ</h6>
					<div class="map">
						<?=$Setting['location_map']?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pl-lg-5">
					<h6>Fanpage</h6>
					<?=$facebook->html();?>
				</div>
			</div>
			<div class="noidung text-white mt-3">
				<?=$footer["content_$lang"]?>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container clearfix">
			<div class="row">
				<div class="col-lg-6">
					<div class="copy text-lg-left">
						&copy; 2019 <span> <?=$Setting['shortname_'.$lang]?> </span>. 
						<a href=" http://www.trungappstudy.com" target="_blank" title="Thiết kế bởi Nguyễn Văn Trung">Thiết kế bởi Nguyễn Văn Trung</a>
					</div>
				</div>
				<div class="col-lg-6 pt-2 pt-lg-0">
					<?=$thongke->html();?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php /*
	<?=$chatfb->html();?>
	<?=$mess->html();?>
	<?=$phone->html();?> 
*/?>
<?=$toolbar->html();?>

