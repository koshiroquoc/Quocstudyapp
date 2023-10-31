<?php
	$title_detail = _timkiem.': <span class="text-danger"> " '. $_GET['keywords'].' "</span>';

	$key=trim($_GET['keywords']);

	$key_khong_dau=$func->changeTitle($key);

	$per_page = 20;
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	
	$where = " #_post where shows=1 and type='lop-moi' or type='gia-su' ";

	if($key!=''){
		$where.=" and ( name_$lang like :key or slug like :key_khong_dau ) ";
		$arr_pdo['key'] = "%".$key."%";
		$arr_pdo['key_khong_dau'] = "%".$key_khong_dau."%";
	}
	
	$where .= " order by number,id desc";

	$db->bindMore($arr_pdo);
	$item  =  $db->query("select name_$lang,slug,id,photo,description_$lang from $where $limit");

	$url = $func->getCurrentPageURL();
	$paging = $func->pagination($where,$per_page,$page,$url,$arr_pdo);