<?php 
    $db->bindMore(array("type"=>"product","shows"=>1,"highlight"=>1));
    $Allnews = $db->query("select slug,name_$lang,photo from #_product where type=:type and shows=:shows and highlight=:highlight order by number desc,id desc");
?>

<div class="boxProd bg clearfix">
    <div class="container mb-lg-4 clearfix">
        <div class="title-style-1">
            <h2>Sản phẩm nổi bật</h2>
        </div>

        <div class="owl-prod">
            <?php foreach ($Allnews as $value): ?>
                <div class="items clearfix">
                    <div class="img">
                        <a class="btn" href="san-pham/<?=$value['slug']?>.html" title="Xem thêm">Xem thêm</a>
                        <a class="effect-v3" href="san-pham/<?=$value['slug']?>.html" title="<?=$value['name_'.$lang]?>">
                            <img src="<?=_upload_product_l.'280x290x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                        </a>
                    </div>
                    <div class="details">
                        <h3><a href="san-pham/<?=$value['slug']?>.html" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>