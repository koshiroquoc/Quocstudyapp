<div class="container">
    <?=$breadcrumbs->urls($row_detail,'nocom')?> 
    <div class="title-style-1"><h1><?=$title_detail?></h1></div>
    <div id="thuvien">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Hình ảnh</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Video</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="thuvien">
                    <div class="row">
                        <?php if(count($album)==0){echo '<div class="alert alert-success w-100" role="alert">'._updating.'</div>';}else{
                            foreach ($album as $key => $value){?>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="view">
                                        <img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'400x250x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                        <div class="flex-center">
                                            <div class="details">
                                                <h3><?=$value['name_'.$lang]?></h3>
                                                <p><?=$func->rebuild_date('d M Y', strtotime($value['datecreate']))?></p>
                                                <a class="chitiet" href="album/<?=$value['slug']?>.html" title="Chi tiết">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                                <a class="like" href="javascript:;" title="Like">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="thuvien">
                        <div class="row">
                            <?php if(count($video)==0){echo '<div class="alert alert-success w-100" role="alert">'._updating.'</div>';}else{
                                foreach ($video as $key => $value){?>
                                    <div class="col-lg-4 col-sm-6 p-0">
                                        <div class="view">
                                            <img onerror="this.src='images/noimage.gif'" src="<?=_upload_video_l.'400x250x1/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                                            <div class="flex-center">
                                                <div class="details">
                                                    <h3><?=$value['name_'.$lang]?></h3>
                                                    <p><?=$func->rebuild_date('d M Y', strtotime($value['datecreate']))?></p>
                                                    <a class="chitiet" href="https://www.youtube.com/embed/<?=$func->youtobi($value['link']);?>" title="Chi tiết" data-fancybox="video">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                    <a class="like" href="javascript:;" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>