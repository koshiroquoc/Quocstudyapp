<?php
    $db->bindMore(array("shows"=>1,"type"=>"tags","highlight"=>1));
    $tagss = $db->query("select name_$lang,slug from #_post where shows=:shows and type=:type and highlight=:highlight order by number,id desc");
?>

<div class="boxTags">
    <ul>
        <?php foreach ($tagss as $value): ?>
            <li><a href="tags/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></li>
        <?php endforeach ?>
    </ul>
</div>
