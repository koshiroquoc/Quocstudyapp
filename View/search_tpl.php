<div class="boxProd clearfix">
    <div class="container">
        <?=$breadcrumbs->urls($row_detail,'nocom')?> 
        <div class="title-style-1"><h1><?=$title_detail?></h1></div>

        <div class="row my-3">
            <?php if(count($item)==0){echo '<div class="alert alert-danger w-100">'._updating.'</div>';}else{         
            foreach ($item as $value) { $id_list = $value['id_list'];?>
                <div class="boxitem col-lg-3 col-md-4 col-6 clearfix">
                    <div class="items">
                        <a class="boxCart" href="javascript:;" data-id="<?=$value['id']?>" title="Mua ngay">
                            <i class="fas fa-cart-plus"></i>
                        </a>
                        <a class="effect-v8" href="san-pham/<?=$value['slug']?>.html">
                            <img src="<?=_upload_product_l.'280x280x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                        </a>
                        <div class="details" data-i="KANGEN">
                            <h4><a href="<?=$func->get_slug_list($id_list);?>" title="<?=$func->get_name_list($id_list);?>"><?=$func->get_name_list($id_list);?></a></h4>
                            <h3><a href="san-pham/<?=$value['slug']?>.html" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                            <p class="price"><span>Giá:</span> <?=$func->giaban($value['price'])?></p>
                        </div>
                    </div>
                </div>
            <?php } } echo $paging?>
        </div>
    </div>
</div>