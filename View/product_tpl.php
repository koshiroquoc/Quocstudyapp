<div class="boxProd clearfix">
    <div class="container">
        <?=$breadcrumbs->urls($row_detail)?>
        <div class="title-style-1 clearfix">
            <p><?=$Setting["slogan_$lang"]?></p>
            <h1><?=$title_detail?></h1>
        </div>

        <div class="row my-3">
            <?php if(empty($item)): echo '<div class="alert alert-danger w-100">'._updating.'</div>';else:
                foreach ($item as $value): $thongtin = json_decode($value['attributes'],true);?>
                    <div class="col-xl-3 col-lg-4 col-6 mb-5 clearfix">
                        <div class="items">
                            <div class="img">
                                <a class="imghv d-block" href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                    <img src="<?=_upload_product_l.'285x290x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                </a>
                            </div>
                            <div class="details">
                                <h3><a href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                                <p class="price"><?=$func->giaban($value['price'])?></p>
                                <a class="btn" href="lien-he/" title="Đặt hàng"><i class="fas fa-shopping-cart"></i> Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
            <?=$paging?>
        </div>
    </div>
</div>
