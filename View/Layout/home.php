<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<?php require_once LAYOUT."head_tpl.php"; ?>
</head>
<body>
	<?=$Setting['codebody']?>
	<div id="container">
		<header>
			<div id="header" class="d-none d-lg-block">
				<?php include LAYOUT."header_tpl.php";?>
			</div>
			<?php include LAYOUT."menu_tpl.php";?>
		</header>

		<main <?=$source!='index' ? 'class="pagein"' : '' ?>>
			<section id="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 d-none d-lg-block">
							<?php include LAYOUT."left_tpl.php";?>
						</div>	
						<div class="col-lg-9">
							<?php include VIEW.$template."_tpl.php";?>
						</div>
					</div>

					<?php if($source=='index'): ?>

						<?=$doitac->html();?>

						<div class="row py-3 pb-lg-4">
							<div class="col-lg-4">
								<?=$News->html();?>
							</div>
							<div class="col-lg-4">
								<?=$Album->html();?>
							</div>
							<div class="col-lg-4">
								<?=$Customers->html();?>
							</div>
						</div>
					<?php endif ?>

				</div>
			</section>
		</main>

		<footer>
			<?php include LAYOUT."footer_tpl.php";?>
		</footer>		
	</div>
	<ul class="vcard d-none">
		<li class="fn"><?=$Setting['shortname_'.$lang]?></li>
		<li class="org"><?=$Setting['name_'.$lang]?></li>
		<li class="adr"><?=$Setting['address_'.$lang]?></li>
		<li class="tel"><?=$Setting['hotline']?></li>
		<li class="pricerange">10000 - 1000000</li>
		<li><a class="url" href="<?=$Setting['website']?>"><?=$Setting['website']?></a></li>
		<li><img class="photo" src="<?=  _upload_hinhanh_l.$Logosite ?>"  alt="<?=$Setting['name_'.$lang] ?>"></li>
	</ul>
	<?php require_once LAYOUT."bottom_tpl.php";?>

	<?=$js->backTop()?>
	<?php if($config['rating']==true && $template!='index'){ echo $rating->js(); } ?>
	<?=$Setting['codebottom']?>
	<?=$fb->sdk()?>
</body>
</html>