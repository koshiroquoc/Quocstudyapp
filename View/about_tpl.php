<div class="container clearfix">
	<?=$breadcrumbs->urls($row_detail)?>  
	<div class="title-style-1"><h2><?=$title_detail?></h2></div>
	<div class="noidung clearfix">
		<?=$row_detail['content_'.$lang]!='' ? $row_detail['content_'.$lang] : '<div class="alert alert-danger w-100" role="alert">'._updating.'</div>';?>
	</div>
	<?=$fb->share()?>
</div>