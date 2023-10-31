<?php
    $db->bindMore(array("shows"=>1,"type"=>"visaochon"));
    $visaochon = $db->query("select name_$lang,description_$lang,slug,icon from #_post where shows=:shows and type=:type order by number,datecreate desc");

    $visao = $db->row("select * from #_info where type='visao'");
?>

<div id="chonchungtoi" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-lg-center">
                <div class="vs_img">
                    <?php foreach ($visaochon as $key => $value){?>
                        <div class="visaochon vs-<?=$key?>" data-key="<?=$key?>">
                            <img src="<?=_upload_post_l.'135x135x1/'.$value['icon']?>" alt="<?=$value['name_'.$lang]?>">
                        </div>
                    <?php } ?>
                </div>
                <div class="d-none d-md-block">
                    <div class="img-l">
                        <img src="images/cus.png" alt="<?=$Setting['name_vi']?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-r mt-4 mt-md-0">
                    <img src="<?=_upload_hinhanh_l.$visao['photo']?>" alt="<?=$Setting['name_vi']?>">
                </div>

                <?php foreach ($visaochon as $key => $value){?>
                    <div class="vs_details this-<?=$key?>" >
                        <h3><span><i class="fas fa-check-circle"></i></span><?=$value['name_'.$lang]?></h3>
                    </div>
                <?php } ?>

                <div class="des">
                    <?=$visao['description_vi']?>
                    <a class="btn" href="vi-sao-chon.html" title="Chi tiết">Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>

