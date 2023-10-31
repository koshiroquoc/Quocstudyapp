<div class="container">
	<?=$breadcrumbs->urls($row_detail)?>
	<div class="title-style-1"><h1><?=_xacnhanthanhtoan?></h1></div>
	<div class="w-100">
		<form method="post" name="frm_order" action="xac-nhan.html" enctype="multipart/form-data" id="frm_order">
			<div class="row">
				<div class="col-lg-6">
					<table border="0" cellpadding="5px" cellspacing="1px" width="100%" class="giohang_tk">
						<tr class="menu_giohang" >
							<td class="res_cart"><?=_stt?></td>
							<td><?=_sanpham?></td>
							<td><?=_soluong?></td>
							<td class="res_cart"><?=_tonggia?></td>
						</tr>
						<?php 
						if(is_array($_SESSION['cart'])){
							$max=count($_SESSION['cart']);
							for($i=0;$i<$max;$i++){
								$pid=$_SESSION['cart'][$i]['productid'];
								$q=$_SESSION['cart'][$i]['qty'];
								$size=$_SESSION['cart'][$i]['size'];
								$mausac=$_SESSION['cart'][$i]['mausac'];
								$pinfo=$cart->get_product_info($pid);
								if($q==0) continue;
							?>
								<tr class="form_giohang" data-id="<?=$pid?>" data-size="<?=$size?>" data-mausac="<?=$mausac?>">
									<td class="res_cart"><?=$i+1?></td>
									<td class="tt_cart">
										<div class="img">
											<a href="<?=$pinfo['type']?>/<?=$pinfo['slug']?>.html" title="<?=$pinfo['name_'.$lang]?>" target="_blank">
												<img src="Upload/product/<?=$pinfo['thumb']?>" alt="<?=$pinfo['name_'.$lang]?>"/>
											</a>
										</div>
										<div class="details">
											<h3><a href="<?=$pinfo['slug']?>/<?=$pinfo['slug']?>.html" title="<?=$pinfo['name_'.$lang]?>" target="_blank"><?=$pinfo['name_'.$lang]?></a></h3>
											<span><?=_gia?> : <?=number_format($pinfo['price'],0, ',', '.')?> đ</span>
										</div>
									</td>
									<td><?=$q?></td>                    
									<td class="res_cart capnhat_price"><?=number_format($pinfo['price']*$q,0, ',', '.')?> đ</td>
								</tr>
							<?php } ?>
							<tr class="tonggia">
								<td colspan="5" ><?=_tonggia?> : <b class="capnhat_full"><?=number_format($cart->get_order_total(),0, ',', '.')?> đ</b></td>
							</tr>
						<?php }	else{echo '<div class="alert alert-danger w-100">'._bankhongcosanphamnaotronggiohang.'</div>';}?>
					</table>
				</div>
				<div class="col-lg-6">
					<div class="xacnhan">
						<div class="khungxn">
							<h4><?=_xacnhanthongtingiaohang?></h4>
							<p><label><b><?=_hoten?> :</b> <?=$_POST['name']?></label></p>
							<p><label><b><?=_diachi?> : </b><?=$_POST['phone']?></label></p>
							<p><label><b><?=_dienthoai?> :</b> <?=$_POST['phone']?></label></p>
							<p><label><b>Email : </b><?=$_POST['email']?></label></p>
							<p><label><b><?=_noidung?> : </b><?=$_POST['content']?></label></p>
						</div>
						<div class="phuongthuc">
							<h4><?=_phuongthucthanhtoan?> </h4>
							<p><label> <input type="radio" name="phuongthuc" value="<?=_thanhtoankhinhanhang?>" /><span> </span><?=_thanhtoankhinhanhang?>  . <br />
								<?php /*?> <strong style="color:rgba(102,102,102,1); text-transform:capitalize; font-weight:100;"><b><?=_mienphi?> </b>,<?=_khuvuchochiminh?></strong> <?php */?>
							</label></p>
							<p> <label> <input type="radio" name="phuongthuc" value="<?=_thanhtoantaicuahang?>" /> <span></span> <?=_thanhtoantaicuahang?> .  <br /><strong style="color:rgba(102,102,102,1); text-transform:capitalize; font-weight:100;"><?=_thanhtoantai?> : <?=$Setting['address_'.$lang]?></strong></label>
							</p>
						</div>
					</div>
					<input  id="submit_thanhtoan" title='<?=_thanhtoan?>' alt='<?=_thanhtoan?>' type="button" name="next" value="<?=_thanhtoan?>" style="cursor:pointer;padding:2px;" class="g_muatiep"/>
				</div>
			</div>             
		</form>
	</div>
</div>