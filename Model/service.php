<?php
    $phongthuyxe = $db->row("select * from #_info where type='phongthuyxe' ");
    $phongthuy = $db->query("select name_$lang,slug from #_post where shows=1 and type='phong-thuy' order by number,id desc");

	@$id =  $_GET['id'];
	#các sản phẩm khác======================
	$select_field = "name_$lang,slug,id,thumb,photo,description_$lang,datecreate,view";
	if($id!=''){

		$db->bindMore(array("shows"=>1,"type"=>$type_bar,"slug"=>$id));
		$row_detail  =  $db->row("select * from #_post where shows=:shows and type=:type and slug=:slug");

		$func->daxem($row_detail['id']);
		$func->luotxem('post',$row_detail['id']);

		$json_code .= $json->BreadcrumbList($row_detail,'post',$com,$type_bar,$title_com,0);
		$json_code .= $json->NewsArticle($row_detail);

		$share_facebook = '<meta property="og:url" content="'.$get_nows.'" />';
		$share_facebook .= '<meta property="og:title" content="'.$row_detail['name_'.$lang].'" />';
		$share_facebook .= '<meta property="og:description" content="'.$row_detail['description_'.$lang].'" />';
		$share_facebook .= '<meta property="og:image" content="'._BASEURL_.'/'._upload_post_l.$row_detail['photo'].'" />';

		$title_detail .= $title_com;

		$title_bar .= $row_detail['title'];
		if($row_detail['title']=='') $title_bar .= $row_detail['name_'.$lang];

		$keywords_bar .= $row_detail['keywords'];
		if($row_detail['keywords']=='') $keywords_bar .= $row_detail['description_'.$lang];

		$description_bar .= $row_detail['description'];
		if($row_detail['description']=='') $description_bar .= $row_detail['description_'.$lang];

	} 