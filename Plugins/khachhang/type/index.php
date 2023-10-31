<?php 
	$Customers = $db->query("select name_$lang,description_$lang, photo from #_post where shows=1 and type='khachhang' order by number,id desc");
?>

<?php if(count($Customers)>0):?>
	<div class="Customers clearfix">
		<div class="container">
			<div class="title-style-1">
				<p><?=$Setting["slogan_$lang"]?></p>
				<h2>Ý KIẾN KHÁCH HÀNG</h2>
			</div>
			<div class="boxing">
				<div class="OwlCustomers">
					<?php foreach ($Customers as $key => $value):  ?>
						<div class="items text-center">
							<div class="boximg ">
								<img src="<?=_upload_post_l.'150x150x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>">
							</div>
							<div class="name  ">
								<p class="h4"><?=$value["description_$lang"]?></p>
								<p class="quote"><i class="fas fa-quote-left"></i></p>
								<h3><?=$value["name_$lang"]?></h3>
								<span>Quận Gò Vấp, Thành phố Hồ Chí Minh</span>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>	
		</div>
	</div>
<?php endif ?>