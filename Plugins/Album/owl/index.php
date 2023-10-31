<?php
    $album = $db->query("select id,name_$lang,photo from #_post where shows=1 and type='album' order by number,id desc");
?>

<div class="boxAlbum clearfix">
    <div class="title-style-1 clearfix">
        <h2>Hình ảnh</h2>
    </div>

    <div class="container clearfix">
        <div class="owl-album">
            <?php foreach ($album as $value): 
                $db->bindMore(array("type"=>"album","id_cate"=>$value['id']));
                $album_photos = $db->query("select id_cate,photo from #_cate_photo where type=:type and id_cate=:id_cate order by number,id desc");
            ?>
            <div class="items">
                <div class="img">
                    <a class="imghv d-block fancybox" data-fancybox="group<?=$value['id']?>" href="<?=_upload_post_l.$value['photo']?>" data-caption="<?=$value['name_'.$lang]?>">
                        <img src="<?=_upload_post_l.'365x300x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>
                    </a>

                    <?php foreach ($album_photos as $v): ?>
                        <a class="fancybox" data-fancybox="group<?=$value['id']?>" href="<?=_upload_cate_l.$v['photo']?>" data-caption="<?=$value["name_$lang"]?>"></a>
                    <?php endforeach ?>
                    <div class="details">
                        <h3><?=$value["name_$lang"]?></h3>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>