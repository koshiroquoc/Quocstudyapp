<?php
	$trangchu = $db->row("select photo,attributes from #_info where type='trangchu'");
	$thongtin = json_decode($trangchu['attributes'],true);
?>

<div id="boxAds" class="clearfix">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4 py-2">
				<h3><span class="numberup" data-to="<?=$thongtin['nam']?>" data-speed="5000"><?=$thongtin['nam']?></span> Năm</h3>
				<p>KINH NGHIỆM</p>
			</div>
			<div class="col-md-4 py-2">
				<h3><span class="numberup" data-to="<?=$thongtin['nguoi']?>" data-speed="5000"><?=$thongtin['nguoi']?></span> Đội ngũ</h3>
				<p>KỸ SƯ - TS - CỬ NHÂN</p>
			</div>
			<div class="col-md-4 py-2">
				<h3><span class="numberup" data-to="<?=$thongtin['duan']?>" data-speed="5000"><?=$thongtin['duan']?></span> Dự án</h3>
				<p>CÔNG TRÌNH THỰC HIỆN</p>
			</div>
		</div>
	</div>
</div>
