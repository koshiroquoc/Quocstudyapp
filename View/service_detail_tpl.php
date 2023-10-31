<div class="container clearfix">
    <?=$breadcrumbs->urls($row_detail)?>  
    <div class="row">
        <div class="col-lg-8 mb-4">
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

        <div class="col-lg-4">
            <div class="phongthuy">
                <h5 class="title bcolor">XEM MÀU XE PHONG THỦY</h5>
                
                <div class="content-find-color">
                   <form action="phong-thuy/" class="text-center" method="POST" onsubmit="return false;">
                        <select class="form-control js_select2w" name="phongthuy">
                            <option value="" selected="">Chọn năm sinh</option>
                            <?php foreach ($phongthuy as $key => $value): ?>
                                <option value="<?=$value["slug"]?>"><?=$value["name_$lang"]?></option>
                            <?php endforeach ?>
                        </select>
                        <button class="btn btn-color px-5 py-2 mt-4" id="viewResult">XEM KẾT QUẢ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
