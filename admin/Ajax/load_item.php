<?php
	/**
	 * Application Main Page That Will Serve All Requests
	 */
	 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';
	
	$id_cat=$_POST['id_cat'];
	$id_item=$_POST['id_item'];

	if(!is_array($id_cat)){
		$id_cat = json_decode($id_cat);
	}

	if(!is_array($id_item)){
		$id_item = json_decode($id_item);
	}

	
	$where .= " type=:type and shows=:shows ";
	if(count($id_cat)>0){
		if(in_array('all',$id_cat)){
		} else {
			$where .= "  and ( id_cat=:id_cat";
			$arr_pdo['id_cat'] = $id_cat[0];
			for($i=1;$i<count($id_cat);$i++){
				$where .= " or id_cat=:id_cat$i";
				$arr_pdo['id_cat'.$i] = $id_cat[$i];
			}
			$where .= " ) ";
		}
	}

    $arr_pdo['type'] = 'product';
	$arr_pdo['shows'] = 1;
    $db->bindMore($arr_pdo);
	$row_item = $db->query("select id,name_vi from #_cate_item where $where order by id desc");

?>         
<?php for($i=0;$i<count($row_item);$i++){ ?>   
<option value="<?=$row_item[$i]['id']?>"<?php if($id_item!=''){if(in_array($row_item[$i]['id'],$id_item)){?> selected="selected"<?php } } ?>> - <?=$row_item[$i]['name_vi']?></option>
<?php } ?>   