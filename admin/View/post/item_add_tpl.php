<?php $attributes = json_decode($item['attributes'],true);?>



<div class="wrapper">

	<div class="control_frm">

		<div class="bc">

			<ul id="breadcrumbs" class="breadcrumbs">

				<li><a href="index.html?com=post&act=add_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Thêm <?=$title_main?></span></a></li>

				<li class="current"><a href="#" onclick="return false;">Thêm</a></li>

			</ul>

			<div class="clear"></div>

		</div>

	</div>

	<form name="supplier" id="validate" class="form" action="index.html?com=post&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">

		<div class="widget">

			<div class="title chonngonngu">

				<ul>

					<?php foreach ($config['lang'] as $key => $value) {?>

						<li><a href="<?=$key?>" class="<?php if($config['activelang']==$key){ echo "active";}?> tipS" title="Chọn <?=$value?>"><img src="Assets/images/<?=$key?>.png" /><?=$value?></a></li>

					<?php } ?>

				</ul>

			</div>	



			<?php if(in_array('list',$config_open)){ ?>

				<div class="formRow">

					<label>Chọn danh mục 1</label>

					<div class="formRight">

					<?=$func->get_main_list()?>

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>



			<?php if(in_array('cat',$config_open)){ ?>

				<div class="formRow">

					<label>Chọn danh mục 2</label>

					<div class="formRight">

					<?=$func->get_main_cat()?>

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>



			<?php if(in_array('item',$config_open)){ ?>

		        <div class="formRow">

					<label>Chọn danh mục 3</label>

					<div class="formRight">

					<?=$func->get_main_item()?>

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>



			<?php if(in_array('sub',$config_open)){ ?>

			<div class="formRow">

				<label>Chọn danh mục 4</label>

				<div class="formRight">

				<?=$func->get_main_sub()?>

				</div>

				<div class="clear"></div>

			</div>

			<?php } ?>



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

					

					<div class="mt10"><img src="<?=_upload_post.$item['thumb']?>"  alt="NO PHOTO" width="100" /></div>



					</div>

					<div class="clear"></div>

				</div>

			<?php } } ?>



			<?php if(in_array('icon',$config_open)){ ?>

				<div class="formRow">

					<label>Tải icon:</label>

					<div class="formRight">

						<input type="file" id="icon" name="icon" />

						<img src="Assets/images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải icon (ảnh JPEG, GIF , JPG , PNG)">

						<div class="note"> width : <?php echo _width_thumb_i*$ratio_;?> px , Height : <?php echo _height_thumb_i*$ratio_;?> px </div>

					</div>

					<div class="clear"></div>

				</div>

				<?php if($_GET['act']=='edit'){?>

	        	<div class="formRow">

	        		<label>Icon Hiện Tại :</label>

	        		<div class="formRight">

	        			<div class="mt10"><img src="<?=_upload_post.$item['icon']?>"  alt="NO PHOTO" width="<?=_width_thumb_i?>" /></div>

	        		</div>

	        		<div class="clear"></div>

	        	</div>

			<?php } } ?>



	        <?php if(in_array('images',$config_open)){ ?>

	        	<div class="formRow">

	        		<label>Hình ảnh kèm theo: </label>

	        		<div class="formRight">

	        			<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><img src="Assets/images/image_add.png" alt="" width="100"></a>                

	        			<?php if($act=='edit'){?>

	        				<?php if(count($ds_photo)!=0){?>       

	        					<?php for($i=0;$i<count($ds_photo);$i++){?>

	        						<div class="item_trich">

	        							<img class="img_trich" width="140px" height="110px" src="<?=_upload_cate.$ds_photo[$i]['photo']?>" />

	        							<input type="text" data-table="cate_photo" data-type="stt" data-id="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['number']?>" class="update_stt tipS" />

	        							<a class="delete_images" data-table="cate_photo" data-url="<?=_upload_cate;?>" data-id="<?=$ds_photo[$i]['id']?>"><img src="Assets/images/delete.png"></a>

	        						</div>

	        					<?php } ?>

	        				<?php }?>

	        			<?php }?>

	        		</div>

	        		<div class="clear"></div>

	        	</div> 

	        <?php } ?>



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

			

			<div class="formRow">

				<label>Slug</label>

				<div class="formRight">

					<input type="text" name="slug" title="Nhập Link web" id="slug" class="tipS validate[required]" value="<?=@$item['slug']?>" />

					<p id="getnewslug"></p>

				</div>

				<div class="clear"></div>

			</div>



			<?php if(in_array('code',$config_open)){ ?>

				<div class="formRow">

					<label>Mã số  </label>

					<div class="formRight">

						<input type="text" name="code" title="Nhập mã số" id="code" class="tipS " value="<?=@$item['code']?>" />

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>

			

			<?php if(in_array('price',$config_open)){ ?>

				<div class="formRow">

					<label>Học phí</label>

					<div class="formRight">

						<input type="text" name="price" title="Nhập giá bán" class="conso tipS " value="<?=@$item['price']?>" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Mức lương</label>

					<div class="formRight">

						<input type="text" name="wage" title="Nhập mức lương" class="conso tipS " value="<?=@$item['wage']?>" />

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>

			

			<?php if(in_array('lopmoi',$config_open)){ ?>

				<div class="formRow">

					<label>Thời gian</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['date']?>" name="attributes[date]" title="Nhập thời gian" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Số buổi</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['day']?>" name="attributes[day]" title="Nhập số buổi" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Yêu cầu</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['request']?>" name="attributes[request]" title="Nhập yêu cầu" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Liên hệ</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['contact']?>" name="attributes[contact]" title="Nhập liên hệ" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Địa chỉ</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['address']?>" name="attributes[address]" title="Nhập địa chỉ" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow ">

					<label>Tình trạng</label>

					<div class="formRight">

						<input type="radio" name="status" id="no" value="0" <?=  $item['status']==0 ? 'checked="checked"' : '' ?>> <label for="no">Chưa giao</label>

						<input type="radio" name="status" id="yes" value="1" <?=  $item['status']==1 ? 'checked="checked"' : '' ?>> <label for="yes">Đã giao</label>

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>



			<?php if(in_array('giasu',$config_open)){ ?>

				<div class="formRow">

					<label>Năm sinh</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['birthday']?>" name="attributes[birthday]" title="Nhập năm sinh" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Công việc</label>

					<div class="formRight">

						<input type="text" value="<?=$attributes['job']?>" name="attributes[job]" title="Nhập công việc" class="tipS" />

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



			<?php if(in_array('content',$config_open)){ ?>

				<?php foreach ($config['lang'] as $key => $value) {?>

				<div class="formRow lang_hidden lang_<?=$key?> <?php if($config['activelang']==$key){ echo "active";}?>">

					<label>Nội Dung (<?=$value?>)</label>

					<div class="ck_editor">

		                <textarea id="content_<?=$key?>" name="content_<?=$key?>"><?=@$item['content_'.$key]?></textarea>

					</div>

					<div class="clear"></div>

				</div>

			<?php } } ?>



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

			<?php if(in_array('seo',$config_open)){ ?>

				<div class="title"><img src="Assets/images/icons/dark/record.png" alt="" class="titleIcon" />

					<h6>Nội dung seo</h6>

				</div>

				<div class="formRow">

					<label>Title</label>

					<div class="formRight">

						<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Từ khóa</label>

					<div class="formRight">

						<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho danh mục" class="tipS" />

					</div>

					<div class="clear"></div>

				</div>

				<div class="formRow">

					<label>Description:</label>

					<div class="formRight">

						<textarea rows="4" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS" name="description"><?=@$item['description']?></textarea>

						<input readonly="readonly" type="text" style="width:50px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 68 - 170 ký tự)</b>

					</div>

					<div class="clear"></div>

				</div>

			<?php } ?>

			<div class="formRow">

				<div class="formRight">

					<input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />

					<input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />

					<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />

					<a href="index.html?com=post&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>

				</div>

				<div class="clear"></div>

			</div>

		</div>

	</form>

</div>



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

