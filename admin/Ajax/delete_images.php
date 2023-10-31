<?php
	/**
	 * Application Main Page That Will Serve All Requests
	 */
	 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';
	
	$id=$_POST['id'];
	$table=$_POST['table'];
	$links=$_POST['links'];

	$db->bindMore(array("id"=>$id));
	$row = $db->row("select id,photo,thumb from #_$table where id=:id");

	if($row){
		for($i=0;$i<count($row);$i++){
			$func->delete_file('../'.$links.$row[$i]['photo']);
			$func->delete_file('../'.$links.$row[$i]['thumb']);
		}
		$db->bindMore(array("id"=>$id));
		$db->query("delete from #_$table where id=:id");
	}
	
?>
