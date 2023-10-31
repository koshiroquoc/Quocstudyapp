<?php
    $list_gs = $db->query("select id,name_$lang,slug from #_cate_list where shows=1 and highlight=1 and type='gia-su' order by number,id desc");
?>

<div class="boxGs clearfix">
    <?php foreach ($list_gs as $vl):
        $dsgs = $db->query("select code,name_$lang,slug,attributes,photo,description_$lang from #_post where shows=1 and id_list='".$vl['id']."' and type='gia-su' order by number,id desc limit 8");
        if(count($dsgs)>0):
            ?>
            <div class="title-style-2 clearfix">
                <h2><a href="gia-su/<?=$vl['slug']?>/"><?=$vl["name_$lang"]?></a></h2>
            </div>
            <div class="row">
                <?php foreach ($dsgs as $value): $arr = json_decode($value['attributes'],true) ?>
                    <div class="col-md-6 mb-4">
                        <div class="items">
                            <div class="img">
                                <a class="imghv d-block" href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
                                    <img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'150x125x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>
                                </a>
                            </div>
                            <div class="details">
                                <?= $value['code'] ? '<p>MS: '.$value['code'].'</p>' : '' ?>
                                <h3><a href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>
                                <?= $arr['birthday'] ? '<p>Năm sinh: '.$arr['birthday'].'</p>' : '' ?>
                                <?= $arr['job'] ? '<p>Công việc: '.$arr['job'].'</p>' : '' ?>
                            </div>
                            <div class="item-childs d-none">
                                <span>MÔ TẢ SƠ LƯỢC:</span>
                                <p><?=$value["description_$lang"]?></p>
                                <a class="contact" href="gia-su/<?=$value['slug']?>" title="Liên hệ tìm gia sư">Liên hệ tìm gia sư</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php if(count($dsgs)>6):?>
                <div class="w-100 text-center">
                    <a class="btn" href="gia-su/<?=$vl['slug']?>/" title="Xem thêm">Xem thêm</a>
                </div>
            <?php endif ?>
        <?php endif ?>

    <?php endforeach ?>
</div>