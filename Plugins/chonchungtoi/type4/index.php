<?php
    $db->bindMore(array("shows"=>1,"type"=>"visaochon"));
    $visaochon  =  $db->query("select name_$lang,slug,icon from #_post where shows=:shows and type=:type order by number,id desc");
?>

<div class="title-style-2"><h2>Vì sao chọn chúng tôi</h2></div>
<div class="w-100">
  <?php foreach ($visaochon as $key => $value) {?>
    <div class="why">
      <div class="img">
        <span><?=$key+1?></span>
      </div>
      <div class="details">
        <h3><a href="vi-sao-chon/<?=$value['slug']?>.html"><?=$value['name_'.$lang]?></a></h3>
      </div>
    </div>
  <?php } ?>
</div>