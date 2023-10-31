<?php 
    $db->bindMore(array("type"=>"product","shows"=>1));
    $Allnews = $db->query("select id,slug,name_$lang,photo,price,oldprice from #_product where type=:type and shows=:shows and price>0 and oldprice>0 order by number desc,id desc");

    $db->bindMore(array("type"=>"product","shows"=>1,"selling"=>1));
    $Selling = $db->query("select id,slug,name_$lang,photo,price,oldprice from #_product where type=:type and shows=:shows and selling=:selling order by number desc,id desc");

    $db->bindMore(array("type"=>"product","shows"=>1,"promotion"=>1));
    $Promotion = $db->query("select id,slug,name_$lang,photo,price,oldprice from #_product where type=:type and shows=:shows and promotion=:promotion order by number desc,id desc");
?>

<div class="boxProd bg clearfix">
    <div class="container clearfix">
        <ul class="nav nav-tabs py-2" id="myTab" role="tablist">
            <li class="align-items-center pl-4 d-none d-md-flex"><img src="images/arrow-title.png" alt="arrow"></li>
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sản phẩm khuyến mãi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sản phẩm bán chạy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sản phẩm mới</a>
            </li>
        </ul>
        <div class="tab-content my-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php if(empty($Allnews)): echo '<div class="alert alert-danger w-100">'._updating.'</div>';else:?>
                    <div class="owl-prod">   
                        <?php foreach ($Allnews as $value): ?>
                            <div class="items clearfix">
                                <div class="img">
                                    <?= $value['price']>0 && $value['oldprice']>0 ? '<span class="sale">'.$func->giamgia($value["oldprice"],$value["price"]).'</span>' : '' ?>
                                    <a class="boxCart" href="javascript:;" data-id="<?=$value['id']?>" title="Đặt hàng">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a class="imghv d-block" href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                        <img src="<?=_upload_product_l.'270x210x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                    </a>
                                </div>
                                <div class="details">
                                    <h3><a href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                                    <p class="price"><?=$func->giamoicu($value['price'],$value['oldprice'])?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php if(empty($Selling)): echo '<div class="alert alert-danger w-100">'._updating.'</div>';else:?>
                    <div class="owl-prod">   
                        <?php foreach ($Selling as $value): ?>
                            <div class="items clearfix">
                                <div class="img">
                                    <?= $value['price']>0 && $value['oldprice']>0 ? '<span class="sale">'.$func->giamgia($value["oldprice"],$value["price"]).'</span>' : '' ?>
                                    <a class="boxCart" href="javascript:;" data-id="<?=$value['id']?>" title="Đặt hàng">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a class="imghv d-block" href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                        <img src="<?=_upload_product_l.'270x210x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                    </a>
                                </div>
                                <div class="details">
                                    <h3><a href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                                    <p class="price"><?=$func->giamoicu($value['price'],$value['oldprice'])?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <?php if(empty($Promotion)): echo '<div class="alert alert-danger w-100">'._updating.'</div>';else:?>
                    <div class="owl-prod">   
                        <?php foreach ($Promotion as $value): ?>
                            <div class="items clearfix">
                                <div class="img">
                                    <?= $value['price']>0 && $value['oldprice']>0 ? '<span class="sale">'.$func->giamgia($value["oldprice"],$value["price"]).'</span>' : '' ?>
                                    <a class="boxCart" href="javascript:;" data-id="<?=$value['id']?>" title="Đặt hàng">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a class="imghv d-block" href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                        <img src="<?=_upload_product_l.'270x210x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                    </a>
                                </div>
                                <div class="details">
                                    <h3><a href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                                    <p class="price"><?=$func->giamoicu($value['price'],$value['oldprice'])?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>

        </div>
    </div>
</div>