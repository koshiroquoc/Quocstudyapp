<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <a class="m-logo" href="./"><img src="<?=_upload_hinhanh_l.'156x156x1/'.$Logosite?>" alt="<?=$Setting['shortname_'.$lang]?>"/></a>
        </div>
        <div class="col-lg-6">
            <img src="<?=_upload_hinhanh_l.'500x156x1/'.$Bannersite?>" alt="<?=$Setting['shortname_'.$lang]?>"/>
        </div>
        <div class="col-lg-3 d-flex align-items-end">
            <div class="hotline">
                <img src="images/hotline.png" alt="Hotline"> Hotline: <a href="<?=preg_replace('/[^0-9]/','', $Setting['hotline'] ) ?>" title="Hotline"><?=$Setting['hotline']?></a>
            </div>
        </div>
    </div>
</div>