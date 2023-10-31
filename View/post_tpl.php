<div class="container">
    <?=$breadcrumbs->urls($row_detail)?>  
    <div class="title-style-1 clearfix">
        <h1><?=$title_detail?></h1>
    </div>
    
    <?= $row_detail['content_'.$lang] != '' ? '<article class="mb-4">'.$row_detail['content_'.$lang].'</article>' : '' ?>

    <?php if(count($item)==0){echo '<div class="alert alert-danger w-100" role="alert">'._updating.'</div>';}else{?>
        <div class="row">
            <?php foreach ($item as $value) {?>
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="post">
                        <div class="img">
                            <a class="imghv d-block" href="<?=$com?>/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                <img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'370x210x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                            </a>
                        </div>
                        <div class="details">
                            <h3><a href="<?=$com?>/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                            <span><i class="far fa-calendar-alt"></i> <?=date('D, d/m/Y', strtotime($value['datecreate']));?>&nbsp; <i class="far fa-eye"></i> <?=$value['view'] ?></span>
                            <p><?=$func->catchuoi($value['description_'.$lang],180)?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php } echo $paging?>
</div>