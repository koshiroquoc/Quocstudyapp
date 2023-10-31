<?php
    $gridAlbum = $db->query("select id,name_$lang,photo from #_post where shows=1 and type='album' and highlight=1 order by number,datecreate desc");
?>

<div id="boxGrid">
    <div class="gridPhoto clearfix">
        <?php foreach ($gridAlbum as $key => $value):
            $db->bindMore(array("type"=>"album","id_cate"=>$value['id']));
            $AB_photos = $db->query("select id_cate,photo from #_cate_photo where type=:type and id_cate=:id_cate order by number,datecreate desc");
            ?>
            <div class="items">
                <a class="effect-v9 fancybox" data-fancybox="group<?=$value['id']?>" href="<?=_upload_post_l.$value['photo']?>" data-caption="<?=$value['name_'.$lang]?>">
                    <img src="<?=_upload_post_l.($key==1 ? '255x410x1/' : '660x410x1/').$value['photo'] ?>" alt="<?=$value['name_'.$lang]?>">
                </a>
                <?php foreach ($AB_photos as $k => $v): ?>
                    <a class="fancybox" data-fancybox="group<?=$value['id']?>" href="<?=_upload_cate_l.$v['photo']?>" data-caption="<?=$value['name_'.$lang]?>"></a>
                <?php endforeach ?>
                <div class="caption">
                    <h3><?=$value['name_'.$lang]?></h3>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>