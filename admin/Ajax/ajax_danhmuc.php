<?php 
	/**
	 * Application Main Page That Will Serve All Requests
	 */
	 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';

	if (isset($_POST["level"])) {

		$level = $_POST["level"];
		$table = $_POST["table"];
		$id=$_POST["id"];
		$type = $_POST["type"];

		switch ($level) {
			case '0':{
				$id_temp= "id_list";
				break;
			}
			case '1':{
				$id_temp= "id_cat";
				break;
			}
			case '2':{
				$id_temp= "id_item";
				break;
			}
			default:
				echo die('Error');
				break;
		}

		$db->bindMore(array("id"=>$id,"type"=>$type));
		$row = $db->query("select * from $table where $id_temp=:id and type=:type order by number,id desc");
		$str='<option>Chọn danh mục</option>';
		foreach ($row as $key => $value) {
			$str.='<option value='.$value["id"].'>'.$value["name_vi"].'</option>';			
		}
		echo  $str;
	}
?>
