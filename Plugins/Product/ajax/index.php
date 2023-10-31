<?php 
    $db->bindMore(array("type"=>"product","shows"=>1,"highlight"=>1));
    $product_list = $db->query("select id,slug,name_$lang from #_cate_list where shows=:shows and highlight=:highlight and type=:type order by number,id desc");
?>

<div class="container clearfix">
    <?php foreach ($product_list as $key => $value):
        $db->bindMore(array("shows"=>1,"type"=>"product","id_list"=>$value['id']));
        $product_cat = $db->query("select id,slug,name_$lang from #_cate_cat where shows=:shows and id_list=:id_list and type=:type order by number,id desc");

        $db->bindMore(array("shows"=>1,"type"=>"product","highlight"=>1,"id_list"=>$value['id']));
        $product = $db->query("select id,slug,name_$lang,photo,price,oldprice from #_product where shows=:shows and highlight=:highlight and id_list=:id_list and type=:type order by number,id desc");

        if(count($product)): ?>
            <div class="showproduct" data-idl="<?=$value['id']?>">
                <div class="row">
                    <div class="col-lg-3 boxList">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="title-list">
                                <h2><a href="javascript:;" title="<?=$value['name_'.$lang]?>" class="choose_idl" data-idl="<?=$value['id']?>" ><?=$value['name_'.$lang]?></a></h2>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar<?=$key?>" aria-controls="navbar<?=$key?>" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar<?=$key?>">
                                <div class="navbar-nav">
                                    <?php foreach ($product_cat as $vc): ?>
                                        <a href="javascript:;" data-idc="<?=  $vc['id'] ?>" title="<?=$vc['name_'.$lang]?>"><?=$vc['name_'.$lang]?></a>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-9">
                        <div id="danhmuc<?=$value['id']?>" rel="<?=$value['id']?>"></div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach?>
</div>