<div class="wrapper">
<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.html?com=link&act=add_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Thêm <?=$title_main?></span></a></li>
            <li class="current"><a href="#" onclick="return false;">Thêm</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<form name="supplier" id="validate" class="form" action="index.html?com=link&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
	<div class="widget">
		<div class="title chonngonngu">
		<ul>
		<?php 
		//$func->dump($config);
		foreach ($config['lang'] as $key => $value) {?>
			<li><a href="<?=$key?>" class="<?php if($config['activelang']==$key){ echo "active";}?> tipS" title="Chọn <?=$value?>"><img src="Assets/images/<?=$key?>.png" /><?=$value?></a></li>
		<?php } ?>
		</ul>
		</div>	
		
		<?php if(in_array('image',$config_open)){ ?>
		<div class="formRow">
			<label>Tải hình ảnh:</label>
			<div class="formRight">
            	<input type="file" id="file" name="file" />
				<img src="Assets/images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
				<div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
			</div>
			<div class="clear"></div>
		</div>
        <?php if($_GET['act']=='edit'){?>
		<div class="formRow">
			<label>Hình Hiện Tại :</label>
			<div class="formRight">
			
			<div class="mt10"><img src="<?=_upload_hinhanh.$item['thumb']?>"  alt="NO PHOTO" width="<?=_width_thumb?>" /></div>

			</div>
			<div class="clear"></div>
		</div>
		<?php } } ?>
        
		<?php if(in_array('name',$config_open)){
		foreach ($config['lang'] as $key => $value) {?>
        <div class="formRow lang_hidden lang_<?=$key?> <?php if($config['activelang']==$key){ echo "active";}?>">
			<label>Tiêu đề (<?=$value?>)</label>
			<div class="formRight">
                <input type="text" name="name_<?=$key?>" title="Nhập tên (<?=$value?>)" id="name_<?=$key?>" class="tipS validate[required]" value="<?=@$item['name_'.$key]?>" />
			</div>
			<div class="clear"></div>
		</div>
		<?php } } ?>
		
		<?php if(in_array('link',$config_open)){ ?>
		<div class="formRow">
			<label>Link  </label>
			<div class="formRight">
                <input type="text" name="link" title="Nhập link" id="link" class="tipS validate[required]" value="<?=@$item['link']?>" />
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>

		<?php if(in_array('description',$config_open)){ ?>
		<?php foreach ($config['lang'] as $key => $value) {?>
		<div class="formRow lang_hidden lang_<?=$key?> <?php if($config['activelang']==$key){ echo "active";}?>">
			<label>Mô tả (<?=$value?>)</label>
			<div class="formRight">
                <textarea rows="10" cols="" title="Nhập mô tả (<?=$value?>) . " class="tipS" name="description_<?=$key?>"><?=@$item['description_'.$key]?></textarea>
			</div>
			<div class="clear"></div>
		</div>
		<?php } } ?>

        <?php if(in_array('thongtin',$config_open)){ $thongtin = json_decode($item['attributes'],true);?>
            <div class="formRow">
                <label>Skype</label>
                <div class="formRight">
                    <input type="text" name="attributes[skype]" title="Nhập skype" class="tipS validate[required]" value="<?=$thongtin['skype']?>" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="formRow">
                <label>Hotline</label>
                <div class="formRight">
                    <input type="text" name="attributes[hotline]" title="Nhập hotline" class="tipS validate[required]" value="<?=$thongtin['hotline']?>" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="formRow">
                <label>Email</label>
                <div class="formRight">
                    <input type="text" name="attributes[email]" title="Nhập email" class="tipS validate[required]" value="<?=$thongtin['email']?>" />
                </div>
                <div class="clear"></div>
            </div>
        <?php } ?>

        <div class="formRow">
          <label>Hiển thị : <img src="Assets/images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
          <div class="formRight">
         
            <input type="checkbox" name="shows" id="check1" value="1" <?=(!isset($item['shows']) || $item['shows']==1)?'checked="checked"':''?> />
             <label>Số thứ tự: </label>
              <input type="text" class="tipS" value="<?=isset($item['number'])?$item['number']:1?>" name="number" style="width:40px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của danh mục, chỉ nhập số">
          </div>
          <div class="clear"></div>
        </div>
		
	</div>  
	<div class="widget">
		<div class="formRow">
			<div class="formRight">
                <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
            	<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            	<a href="index.html?com=link&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>
			</div>
			<div class="clear"></div>
		</div>

	</div>
</form>        </div>



<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
  });
</script>
