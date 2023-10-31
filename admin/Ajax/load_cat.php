<?php
	/**
	 * Application Main Page That Will Serve All Requests
	 */
	 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';
	
	$id_list=$_POST['id_list'];
	$id_cat=$_POST['id_cat'];

	if(!is_array($id_list)){
		$id_list = json_decode($id_list);
	}

	if(!is_array($id_cat)){
		$id_cat = json_decode($id_cat);
	}

	$where .= " type=:type and shows=:shows ";
	if(count($id_list)>0){
		if(in_array('all',$id_list)){
			
		} else {
			$where .= "  and ( id_list=:id_list";
			$arr_pdo['id_list'] = $id_list[0];
			for($i=1;$i<count($id_list);$i++){
				$where .= " or id_list=:id_list$i ";
				$arr_pdo['id_list'.$i] = $id_list[$i];
			}
			$where .= " ) ";
		}
	}
	$arr_pdo['type'] = 'product';
	$arr_pdo['shows'] = 1;
    $db->bindMore($arr_pdo);
	$row_cat = $db->query("select id,name_vi from #_cate_cat where $where order by id desc");

?>

<?php for($i=0;$i<count($row_cat);$i++){ ?>   
<option value="<?=$row_cat[$i]['id']?>" <?php  if($id_cat!=''){if(in_array($row_cat[$i]['id'],$id_cat)){?> selected="selected"<?php } } ?>> - <?=$row_cat[$i]['name_vi']?></option>
<?php } ?>   