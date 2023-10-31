<div id="project">
    <div class="container">
        <?=$breadcrumbs->urls($row_detail)?>
        <div class="title-style-1 clearfix"><h1><?=$title_detail?></h1></div>
        <div class="row">
            <?php if(empty($item)): echo '<div class="alert alert-danger w-100">'._updating.'</div>';else:
                foreach ($item as $value): $thongtin = json_decode($value['attributes'],true);?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="items">
                            <div class="img">
                                <a class="imghv d-block" href="du-an/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">
                                    <img src="<?=_upload_post_l.'380x270x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>
                                </a>
                            </div>
                            <div class="details">
                                <h3><?=$value["name_$lang"]?></h3>
                                <p><?=$value["description_$lang"]?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
            <?=$paging?>
        </div>
    </div>
</div>
