<div class="container clearfix">
    <?=$breadcrumbs->urls($row_detail)?>  
    <div class="row">
        <div class="col-lg-8">
            <h1 class="tieude"><?=$row_detail['name_'.$lang]?></h1>
            <p class="ngaydang"><i class="far fa-calendar-alt"></i> <?=date('D, d/m/Y - H:s', strtotime($row_detail['datecreate']));?></p>
            <div class="noidung clearfix">
                <?=$row_detail['content_'.$lang]!='' ? $row_detail['content_'.$lang] : '<div class="alert alert-danger w-100" role="alert">'._updating.'</div>';?>
            </div>
            <?php if($config['rating']==true){ echo $rating->html($com,$row_detail['id']); } ?>  
                <?php if($row_detail['tags']!=''): ?>
                    <div class="w-100 my-2 clearfix">
                        <ul class="tags-list">
                            <i class="fa fa-tag"></i> Tags:
                            <?php for ($i=0,$count = count($tags); $i < $count ; $i++) :
                                $tags_name= $db->row("select * from #_post where type='tags' and id='".$tags[$i]."' ");?>
                                <li><a href="tags/<?=$tags_name["slug"]?>"><?=$tags_name["name_vi"]?></a></li>
                            <?php endfor ?>
                        </ul>
                    </div>
                <?php endif ?>
            <?=$fb->share()?>
        </div>

        <!-- newsfrind -->
        <div class="col-lg-4">
            <?php if(count($list_news)>0): ?>
            <div class="newsfrind">
                <div class="title-news">Lĩnh vực tin</div>
                <ul class="ul">
                    <?php foreach ($list_news as $value): ?>
                        <li class="clearfix">
                            <div class="details">
                                <h3> <a href="<?=$com?>/<?=$value['slug']?>/" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>

            <div class="newsfrind">
                <div class="title-news">Cùng lĩnh vực</div>
                <ul class="ul">
                    <?php foreach ($item as $tinkhac): ?>
                        <li class="clearfix">
                            <?php if($com!='lop-moi'): ?>
                                <div class="img">
                                    <a href="<?=$com?>/<?=$tinkhac['slug']?>" title="<?=$tinkhac['name_'.$lang]?>">
                                        <img onerror="this.src='images/noimage.gif'" src="<?= _upload_post_l.'120x100x1/'.$tinkhac['photo']?>" alt="<?=$tinkhac['name_'.$lang]?>">
                                    </a>
                                </div>
                            <?php endif ?>
                            <div class="details">
                                <h3> <a href="<?=$com?>/<?=$tinkhac['slug']?>" title="<?=$tinkhac['name_'.$lang]?>"><?=$tinkhac['name_'.$lang]?></a></h3>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>

    </div>
</div>
