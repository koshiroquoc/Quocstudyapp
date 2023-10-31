<?php
    $gsnb = $db->query("select code,name_$lang,slug,attributes,photo from #_post where shows=1 and type='gia-su' and highlight=1 order by number,id desc");
?>

<div class="boxNews clearfix">
    <div class="title-style-2 clearfix">
        <h2>Gia sư tiêu biểu</h2>
    </div>

    <div class="w-100">
        <div class="owl-gs">
            <?php foreach ($gsnb as $value): $arr = json_decode($value['attributes'],true) ?>
                <div class="items">
                    <div class="img">
                        <a class="imghv d-block" href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
                            <img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'190x150x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>
                        </a>
                    </div>
                    <div class="details">
                        <?= $value['code'] ? '<p>MS: '.$value['code'].'</p>' : '' ?>
                        <h3>Họ và tên: <a href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>
                        <?= $arr['birthday'] ? '<p>Năm sinh: '.$arr['birthday'].'</p>' : '' ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>