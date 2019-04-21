<?php 
	

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	else{
		$action = '';
		
	}
	
	switch ($action) {
		case 'add':{
			if (isset($_POST['add_baiviet'])) {
				$linkanh = $_POST['linkanh'];
				$tieude = $_POST['tieude'];
				$noidung = $_POST['noidung'];
				$db ->InsertData($linkanh,$tieude,$noidung);
			}
			require_once('View/baiviet/add_baiviet.php');
			break;
			
		}
		case 'edit':{
			 if (isset($_GET['id'])) {
			 	$id = $_GET['id'];
			 	$dataID=$db->getDataID($id);

			 	if (isset($_POST['edit_baiviet'])) {
			 		// lay du lieu tu view
			 		$linkanh = $_POST['linkanh'];
			 		$tieude = $_POST['tieude'];
			 		$noidung = $_POST['noidung'];
			 		// truyen sang model
			 		if($db->UpdataData($id,$linkanh,$tieude,$noidung)){
			 			header('location: index.php?controller=baiviet&action=list');
			 		}
			 	}
			}
			require_once('View/baiviet/edit_baiviet.php');
			break;
		}
		case 'delete':{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$nametable = 'dulieu';
				if($db->DeleteData($id,$nametable)){
					header('location: index.php?controller=baiviet&action=list');
				}
			}
			break;
		}
		case 'list':{
			$nametable='dulieu';
			$data = $db->getAllData($nametable);
			require_once('View/baiviet/list.php');
			break;
		}
		case 'chitiet':{
			 if (isset($_GET['id'])) {
			 	$id = $_GET['id'];
			 	$dataID=$db->getDataID($id);
			}
			require_once('View/baiviet/chitietbaiviet.php');
			break;
		}
		case 'check':{			
			require_once('View/baiviet/check.php');
			if (isset($_POST['check'])) {
				$matkhau = $_POST['matkhau'];
				$check=$db->checkLogin($matkhau);
				if($check)
				{
					header('location: index.php?controller=baiviet&action=list');
				}
				else
				{
					echo "<h3 style='color:red; text-align:center;'>Sai mật khẩu</h3>";
				}
			}
			  
			break;
		}
		default:{
			$nametable = 'dulieu';
			$data = $db->getAllData($nametable);
			require_once('View/baiviet/index.php');
			break;
		}
	}
 ?>