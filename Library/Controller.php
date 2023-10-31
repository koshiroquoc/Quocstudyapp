<?php

	$_SESSION['ONWEB'] = true;
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;

	$Setting  =  $db->row("select * from #_setting limit 1");

	$db->bindMore(array("type"=>"bgweb"));
	$row_background = $db->row("select * from #_bgweb where type=:type limit 1");

	$db->bindMore(array("type"=>"favicon"));
	$Favicon = $db->row("select photo_vi as photo from #_photo where type=:type limit 1 ");

	$db->bindMore(array("type"=>"logo"));
	$Logosite = $db->row("select photo_vi as photo from #_photo where type=:type");
	$Logosite = $Logosite['photo'];

	$db->bindMore(array("type"=>"banner"));
	$Bannersite  =  $db->row("select photo_vi as photo,link from #_photo where type=:type");
	$Bannersite = $Bannersite['photo'];

	if($row_background['shows']==1){
		$plugin_css .="body{";
		$plugin_css .="background:url("._upload_hinhanh_l.$row_background['photo'].") ".$row_background['re_peat']." ".$row_background['waytop']." ".$row_background['wayleft'].";";
		$plugin_css .="background-color:".$row_background['bgcolor'].";";
		$plugin_css .="background-attachment:".$row_background['fix_bg']."; ";
		$plugin_css .="}";
	}

	$bgheader = $db->row("select * from #_bgweb where type='bgheader' ");
    $plugin_css .="#header{background-image: url("._upload_hinhanh_l.$bgheader['photo'].")}";

	$thongtin_ft = new \Library\plugins('thongtin','listul');
    $plugin_css .= $thongtin_ft->css();

    $facebook = new \Library\plugins('facebook','type1'); 

    $mangxh = new \Library\plugins('mangxh','mangxh');
    $plugin_css .= $mangxh->css();
    
    $toolbar = new \Library\plugins('toolbar','type3');
    $plugin_css .= $toolbar->css();
    //$plugin_js .= $toolbar->js();

    $Video = new \Library\plugins('Video','type2');
    $plugin_css .= $Video->css();
    $plugin_js .= $Video->js();

    $thongke = new \Library\plugins('thongke','2truong');
    $plugin_css .= $thongke->css();

	switch($com){
		case 'tin-tuc':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "post";
			$type_bar = 'tintuc';
			$title_com = 'Tin tức';
			break;
		case 'lop-moi':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "service";
			$type_bar = 'lop-moi';
			$title_com = 'Lớp mới';
			break;
		case 'gia-su':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "service";
			$type_bar = 'gia-su';
			$title_com = 'Tình nguyện viên';
			break;
		case 'day-kem':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "post";
			$type_bar = 'day-kem';
			$title_com = 'Dạy kèm';
			break;
		case 'phu-huynh':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "post";
			$type_bar = 'phu-huynh';
			$title_com = 'Phụ huynh';
			break;
		case 'tuyen-dung':
			$source = "post";
			$template = isset($_GET['id']) ? "post_detail" : "post";
			$type_bar = 'tuyen-dung';
			$title_com = 'Tuyển dụng';
			break;
		case 'lien-he':
			$source = "contact";
			$template = "contact";
			$title_com = _lienhe;
			break;
		case 'tim-kiem':
			$source = "search";
			$template = "post";
			$title_com = 'Tìm kiếm';
			break;
		case 'gioi-thieu':
			$source = "about";
			$template = "about";
			$title_com = _gioithieu;
			$type_bar = 'gioithieu';
			break;
		case 'bang-gia':
			$source = "about";
			$template = "about";
			$title_com = 'Thông tin tham khảo';
			$type_bar = 'banggia';
			break;
		case 'dang-ky':
			$source = "registered";
			$template = "registered";
			$title_com = 'Đăng ký tình nguyện viên';
			$type_bar = 'registered';
			break;
		case 'site-map':
			$source = "sitemap";
			$template ="sitemap";
			break;
		case '404':
			$source = "404";
			$template ="404";
			break;
			
		default:
			if($com!=''){
				header("HTTP/1.1 301 Moved Permanently"); 
				header("Location: /"); 
				exit();
			}
			$source = "index";
			$template = "index";
			break;
	}
	
	if($source!="") include MODEL.$source.".php";
	
	if(isset($_REQUEST['com']) && $_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		

	if(isset($_REQUEST['com']) && $_REQUEST['com']=='thoat')
	{
		unset($_SESSION['login']);
		header("location:index.html");
	}	

	if( isset($_REQUEST['command']) && $_REQUEST['command']=='add' && isset($_REQUEST['productid']) && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		$soluong=1;
		addtocart($pid,$soluong);
		redirect("thanh-toan.html");
	}

?>