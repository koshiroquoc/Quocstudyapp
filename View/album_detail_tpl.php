<div class="container">
    <div class="title-style-1"><h2><?=$title_detail?></h2></div>
    <div id="thuvien">
        <div id="gallery-wrap">
            <ul class="ul grid effect-1" id="grid">
             <?php foreach ($ab_photos as $key => $value): ?>
                <li class="loaded">
                    <div class="rel">
                        <?php /*?> <a href="<?=_upload_cate_l.$value['photo']?>" data-fancybox="images" data-caption="<?=$row_detail['name_'.$lang]?>"> <?php */?>
                        <a rel="prettyPhoto[gallery<?=$key+1?>]" title="<?=$row_detail['name_'.$lang]?>" href="<?=_upload_cate_l.$value['photo']?>">
                            <img src="<?=_upload_cate_l.$value['photo']?>" alt="<?=$row_detail['name_'.$lang]?>">
                        </a>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="noidung">
        <div class="clear"></div>
        <?php if($config['rating']==true){ echo $rating->html($com,$row_detail['id']); } ?>
        <?=$fb->share()?>
    </div>
</div>
</div>