<?php
	/**
	 * Application Main Page That Will Serve All Requests
	 */
	 
	defined( 'ROOT' ) ?:  define( 'ROOT', dirname(__DIR__));
	defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
	require_once dirname(__DIR__). '/Library/autoload.php';
	$type = $_POST['type'];

	switch ($type) {

		case 'stt':
			// update Number table
			$table = $_POST['table'];
			$id = $_POST['id'];
			$value = $_POST['value'];

			$data['number'] = $value;
			$db->setTable($table);
			$db->setWhere('id', $id);
			echo $db->update($data);
			break;

		case 'soluong':
			// update Number table
			$table = $_POST['table'];
			$id = $_POST['id'];
			$value = $_POST['value'];

			$data['amount'] = $value;
			$db->setTable($table);
			$db->setWhere('id', $id);
			echo $db->update($data);
			break;

		case 'hienthi':
			// update Number table
			$table = $_POST['table'];
			$id = $_POST['id'];
			$value = $_POST['value'];

			$data['shows'] = $value;
			$db->setTable($table);
			$db->setWhere('id', $id);
			echo $db->update($data);
			break;
		default:
			// update Number table
			$table = $_POST['table'];
			$id = $_POST['id'];
			$value = $_POST['value'];

			$data[$type] = $value;
			$db->setTable($table);
			$db->setWhere('id', $id);
			echo $db->update($data);
			// code...
			break;
	}

	
?>	