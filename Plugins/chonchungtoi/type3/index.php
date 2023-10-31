<?php
  $db->bindMore(array("shows"=>1,"type"=>"thongtin"));
  $item  =  $db->query("select name_$lang,description_$lang,slug,thumb from #_baiviet where shows=:shows and type=:type order by number,id desc");
?>
<div id="chonchungtoi">
  <ul class="owl_chonchungtoi none_control">
  <?php for($i=0;$i<count($item);$i++){?>
      <li>
          <img src="<?=_upload_baiviet_l.$item[$i]['thumb']?>" alt="<?=$item[$i]['name_'.$lang]?>" />
          <h3><?=$item[$i]['name_'.$lang]?></h3>
          <p><?=$item[$i]['description_'.$lang]?></p>
      </li>
  <?php } ?>
  </ul>
</div>

<script type="text/javascript">
  $(document).ready(function(e) {
    $('.owl_chonchungtoi').owlCarousel({
          loop:false,
          margin:40,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:2,
                  nav:true
              },
              1000:{
                  items:4,
                  nav:true,
              }
          }
    })
  });
</script>