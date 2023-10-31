<div class="fix_tel">
    <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon">
        <div class="ring-alo-ph-circle"></div>
        <div class="ring-alo-ph-circle-fill"></div>
        <div class="ring-alo-ph-img-circle"><a href="tel:<?=preg_replace('/[^0-9]/','', $Setting['hotline'] )?>"><img class="lazy" src="images/phone-ring.png" alt="Hotline"></a></div>
    </div>
    <div class="tel">
        <p class="fone"><?=$Setting['hotline']?></p>
    </div>
</div>