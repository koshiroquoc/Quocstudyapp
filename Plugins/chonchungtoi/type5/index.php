<?php
    $avt_visao = $db->row("select photo_vi from #_photo where type='visao' ");

    $db->bindMore(array("shows"=>1,"type"=>"visaochon"));
    $item_visao = $db->query("select name_$lang,description_$lang,slug,thumb,icon from #_post where shows=:shows and type=:type order by number desc,id desc");
?>


<div id="visaochon">
    <div class="container clearfix">
        <div class="title-style-1 clearfix">
            <h2>Vì sao chọn chúng tôi</h2>
            <p>Hoạt động chăm sóc sắc đẹp đã trở thành việc thiết yếu và ngày nay lại càng trở nên thiết thực hơn</p>
        </div>

        <div class="row pt-lg-3">
            <div class="col-lg-3 col-sm-6 p-lg-0">
                <?php for ($i=0; $i<count($item_visao); $i++) {if($i%2==0){?>
                    <div class="media reason-item col-left mb-lg-5 mb-2 pb-3">
                        <img src="<?=_upload_post_l.'60x60x1/'.$item_visao[$i]['icon']?>" class="mr-3 rounded-circle align-self-start" alt="<?=$item_visao[$i]['name_'.$lang]?>">
                        <div class="media-body text-left">
                            <h3 class="l"><?=$item_visao[$i]['name_'.$lang]?></h3>
                            <?=$func->catchuoi($item_visao[$i]['description_'.$lang],150)?>
                        </div>
                    </div>
                <?php } }?>
            </div>

            <div id="img-reason" class="col-lg-6 d-none d-lg-block">
                <figure class="figure people-center">
                    <img src="<?=_upload_hinhanh_l.'600x380x1/'.$avt_visao['photo_vi']?>" alt="people">
                </figure>
            </div>
            <div class="col-lg-3 col-sm-6 p-lg-0">
                <?php for ($i=0; $i<count($item_visao); $i++) { if($i%2!=0){?>
                    <div class="media reason-item col-right mb-lg-5 mb-2 pb-3">
                        <div class="media-body text-right ">
                            <h3 class="r"><?=$item_visao[$i]['name_'.$lang]?></h3>
                            <?=$func->catchuoi($item_visao[$i]['description_'.$lang],150)?>
                        </div>
                        <img src="<?=_upload_post_l.'60x60x1/'.$item_visao[$i]['icon']?>" class="ml-3 rounded-circle align-self-start" alt="<?=$item_visao[$i]['name_'.$lang]?>">
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>