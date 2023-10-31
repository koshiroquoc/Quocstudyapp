<?php 
    $db->bindMore(array("shows"=>1,"type"=>"product"));
    $prod_list = $db->query("select id,name_$lang,slug from #_cate_list where shows=:shows and type=:type and highlight=1 order by number desc,id desc");
    foreach ($prod_list as $k => $v) {

    $db->bindMore(array("shows"=>1,"type"=>"product"));
    $sanpham = $db->query("select slug,name_$lang,photo from #_product where shows=:shows and type=:type and highlight=1 and id_list=".$v['id']." order by number desc,id desc");
    if(count($sanpham)):?>

        <div class="boxProd <?=($k%2==0) ? '' : 'bg' ?> clearfix">
            <div class="container clearfix">
                <div class="title-style-1 clearfix">
                    <h2><a href="<?=$v['slug']?>" title="<?=$v['name_'.$lang]?>"><?=$v['name_'.$lang]?></a></h2>
                </div>

                <div class="owl-prod">
                    <?php foreach ($sanpham as $value): ?>
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
        <?php endif?>
<?php } ?>