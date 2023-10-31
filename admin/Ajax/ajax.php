<?php 
 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';

	$act = $_POST['act'];
	switch ($act) {
		case 'getDetail':
			$row = $db->row("select * from #_product where id='".$_POST['id']."' ");
			echo "https://trungappstudy.comy/".$row['links'];
			break;
		case 'slug':
			echo $func->changeTitle($_POST['name']);
			break;

		case 'getPro':
			$row = $db->query("select name_vi,id from #_product where id_cat='".$_POST['id']."' ");
			$result .= "<option value=''>Chọn sản phẩm</option>";
			for ($i = 0; $i < count($row); $i++) {
				$result .= "<option value='".$row[$i]['id']."'>".$row[$i]['name_vi']."</option>";
			}
			echo $result;
			break;
		case 'savedetail':
			if($_POST['noidung']!=''){

				$row_detail = $db->row("select * from #_product where id='".$_POST['id']."' ");
				$content = str_replace("'","",$_POST['noidung']);
				$linklists = explode('<div class="main pl-parent">',$content);
				$linklists = explode('href="',$linklists[1]);
				$linklists = explode('?',$linklists[1]);

				$linklists_tb = explode('<a class="thumbnail" href="',$content);
				for ($i = 1; $i <count($linklists_tb) ; $i++) {
					$linkthumb = explode('?',$linklists_tb[$i]);
					$data1['photo2'] = $linkthumb[0];
					$data1['type'] = 'product';
					$data1['id_cate'] = $row_detail['id'];
					$data1['dateupdate'] = date("Y-m-d H:i:s");
					$data1['datecreate'] = date("Y-m-d H:i:s");
					$db->setTable('cate_photo');
					$db->insert($data1);
				}

				$masp = explode('<span class="sku__value">',$content);
				$masp = explode('</span>',$masp[1]);

				$content = explode('<table class="noborder">',$content);
				$content = explode('</table>',$content[2]);

				$data['photo2'] = $linklists[0];
				$data['code'] = $masp[0];
				$data['content_vi'] = '<table class="noborder">'.$content[0].'</table>';
				$db->setTable('product');
				$db->setWhere('id',$row_detail['id']);
				$db->update($data);
				echo "update Thành công";
			}
			break;
		case 'selectlist':
			$row = $db->query("select name,id from #_place_dist where id_city='".$_POST['id']."' ");
			$result .= "<option value=''>Chọn quận huyện</option>";
			for ($i = 0; $i < count($row); $i++) {
				$result .= "<option value='".$row[$i]['id']."'>".$row[$i]['name']."</option>";
			}
			echo $result;
			break;
		
		default:
			// code...
			break;
	}
	
?>
