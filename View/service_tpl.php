<div class="container">    <?=$breadcrumbs->urls($row_detail)?>      <div class="title-style-1 clearfix">        <h1><?=$title_detail?></h1>    </div>    <?= $row_detail['content_'.$lang] != '' ? '<article class="mb-4">'.$row_detail['content_'.$lang].'</article>' : '' ?>        <?php if(count($item)==0){echo '<div class="alert alert-danger w-100" role="alert">'._updating.'</div>';}else{        if($com=='gia-su'){?>            <div class="boxGs">                <div class="row">                    <?php foreach ($item as $value){ $arr = json_decode($value['attributes'],true) ?>                    <div class="col-md-6 mb-4">                        <div class="items">                            <div class="img">                                <a class="imghv d-block" href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>">                                    <img onerror="this.src='images/noimage.gif'" src="<?=_upload_post_l.'150x125x1/'.$value['photo']?>" alt="<?=$value["name_$lang"]?>"/>                                </a>                            </div>                            <div class="details">                                <?= $value['code'] ? '<p>MS: '.$value['code'].'</p>' : '' ?>                                <h3><a href="gia-su/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></h3>                                <?= $arr['birthday'] ? '<p>Năm sinh: '.$arr['birthday'].'</p>' : '' ?>                                <?= $arr['job'] ? '<p>Công việc: '.$arr['job'].'</p>' : '' ?>                            </div>                            <div class="item-childs d-none">                                <span>MÔ TẢ SƠ LƯỢC:</span>                                <p><?=$value["description_$lang"]?></p>                                <a class="contact" href="gia-su/<?=$value['slug']?>" title="Liên hệ tìm tình nguyện viên">Liên hệ tìm tình nguyện viên</a>                            </div>                        </div>                    </div>                    <?php } echo $paging?>                </div>            </div>        <?php }else{?>             <div class="row">                <?php foreach ($item as $value){ $arr = json_decode($value['attributes'],true) ?>                <div class="col-12 col-md-6 mb-4">                    <div class="service">                        <div class="items">                            <div class="arrow_box">                                <h4><b>MS: </b><?=$value['code']?></h4>                                <?=$value['status']==0 ? 'Lớp đang cần tình nguyện viên' : '' ?>                            </div>                            <h3><b>Môn dạy: </b><?=$value['name_'.$lang]?></h3>                            <p>                                <b>Địa chỉ: </b><?= $arr['address'] ?>                                <a target="_blank" rel="nofollow" href="https://maps.google.com/maps?q=<?= $arr['address'] ?>&hl=vi&ie=UTF8">                                    <i class="text-danger ml-2 fas fa-map-marker-alt"></i>                                </a>                            </p>                            <p><b>Mức lương: </b><span><?=$value['wage']==0 ? 'Miễn phí' : number_format ($value['wage'],0,',','.').' VNĐ' ?></span></p>                            <p><b>Thời gian: </b><?= $arr['date'] ?></p>                            <p><b>Số buổi: </b><?= $arr['day'] ?></p>                            <p><b>Yêu cầu: </b><?= $arr['request'] ?></p>                            <p><b>Liên hệ: </b><a href="tel:<?= $arr['contact'] ?>"><?= $arr['contact']!='' ? $arr['contact'] : $Setting['hotline'] ?></a></p>                            <div class="boxshare">                                <a href="https://twitter.com/share?url=<?= $$get_nows ?>" target="_blank" rel="nofollow">                                    <i class="fab fa-twitter-square"></i>                                </a>                                <a href="//www.facebook.com/sharer.php?u=<?= $$get_nows ?>" target="_blank" rel="nofollow">                                    <i class="ml-2 fab fa-facebook-square"></i>                                </a>                                <a class="btn btn-danger float-right" href="lien-he/" title="Đăng ký dạy">ĐĂNG KÝ DẠY</a>                            </div>                        </div>                    </div>                </div>            <?php } echo $paging?>        </div>    <?php } } ?></div>