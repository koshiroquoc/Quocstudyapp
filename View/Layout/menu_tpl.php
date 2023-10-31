

<div id="menu">

    <div class="container">

        <nav class="main-nav">

            <ul class="text-lg-center">

                <li <?=$func->activemenu('')?>><a href="./" title="<?=_trangchu?>"><?=_trangchu?></a></li>

                <li <?=$func->activemenu('lop-moi')?>><a href="lop-moi/" title="Lớp mới">Lớp mới</a>

                    <?=$func->danhmuccap('cate','lop-moi','lop-moi',2) ?>

                </li>

                <li <?=$func->activemenu('phu-huynh')?>><a href="phu-huynh/" title="Phụ huynh">Phụ huynh</a>

                    <?=$func->danhmuccap('cate','phu-huynh','phu-huynh',2) ?>

                </li>

                <li <?=$func->activemenu('gia-su')?>><a href="gia-su/" title="Tình nguyện viên">Tình nguyện viên</a>

                    <?=$func->danhmuccap('cate','gia-su','gia-su',2) ?>

                </li>

                <li <?=$func->activemenu('day-kem')?>><a href="day-kem/" title="Dạy kèm">Dạy kèm</a></li>

                <li <?=$func->activemenu('tuyen-dung')?>><a href="tuyen-dung/" title="Tuyển dụng">Tuyển dụng</a>

                    <?=$func->danhmuccap('cate','tuyen-dung','tuyen-dung',2) ?>

                </li>

                
                <li <?=$func->activemenu('tin-tuc')?>><a href="tin-tuc/" title="Liên hệ">Tin tức</a></li>
                <li <?=$func->activemenu('lien-he')?>><a href="lien-he/" title="Liên hệ">Liên hệ</a></li>


            </ul>

        </nav>

        <div class="m-nav d-lg-none">

            <button class="menu-btn act nav-close d-lg-none" type="button">

                <i></i>

            </button>

            <div class="nav-ct"></div>

        </div>

        <div class="row">

            <div class="d-lg-none mx-auto">

                <a href="./" title="logo" class="m-logo"><img src="<?=_upload_hinhanh_l.'156x156x1/'.$Logosite?>" alt="<?=$Setting['shortname_'.$lang]?>"/></a>

                <a class="smooth h-hotline" href="tel:<?=$row_setting['hotline'];?>" title="<?=$row_setting['hotline'];?>">Hotline: <?=$Setting['hotline'];?></a>

                <button class="menu-btn nav-open d-lg-none" type="button"><i></i></button>

            </div>

        </div>

    </div>

</div>





<?php /*?> <div id="boxleft" class="d-lg-none px-3 mb-3">

    <div class="tutor">

        <h3>Liên hệ tìm gia sư</h3>

        <a href="<?=preg_replace('/[^0-9]/','', $Setting['hotline'] ) ?>" title="Hotline"><?=$Setting['hotline']?></a>

    </div>

    <div class="restutor">

        <h3>Đăng ký tìm gia sư</h3>

        <a href="<?=preg_replace('/[^0-9]/','', $Setting['hotline'] ) ?>" title="Hotline"><?=$Setting['hotline']?></a>

    </div>

</div> <?php */?>