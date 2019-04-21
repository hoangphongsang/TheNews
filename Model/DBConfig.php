<?php 
	class Database{
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = '';
		private $dbname = 'TheNews';

		private $conn = null;
		private $result = null;


		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username,$this->pass,$this->dbname);
			if (!$this->conn) {
				echo "Connect Error!";
				exit();
			}
			else{
				mysqli_set_charset($this->conn,'utf8');
			}
			return $this->conn;
		}

		// thuc thi cau lenh truy van
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		//phuong thuc lay du lieu
		public function getData()
		{
			// $sql = "SELECT * from dulieu where id='$id'";
			// $this->execute($sql);
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}
		// phuong thuc lay toan bo du lieu
		public function getAllData($table)
		{
			$sql = "SELECT * from $table";
			$this->execute($sql);
			if(!$this->result){
				$data=0;
			}
			else{
				while ($datas = $this->getData()) {
					$data[] = $datas;
				}
			}
			return $data;
		}
		public function getDataID($id)
		{
			$sql = "SELECT * from dulieu where id='$id'";
			$this->execute($sql);
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}

		//phuong thuc dem so ban ghi


		// phuong thuc them du lieu
		public function InsertData($linkanh,$tieude,$noidung)
		{
			$sql = "INSERT INTO dulieu(id,linkanh,tieude,noidung)values(null,'$linkanh','$tieude','$noidung') ";
			return $this->execute($sql);
		}
		// phuong thuc sua du lieu

		public function UpdataData($id,$linkanh,$tieude,$noidung)
		{
			$sql= "UPDATE dulieu SET linkanh = '$linkanh',tieude='$tieude',noidung='$noidung' WHERE id='$id'";
			return $this->execute($sql);
		}
		public function checkLogin($matkhau)
		{
			if($matkhau =="sangdeptrai"){
				return true;
			}
			else{
				return false;
			}
		}
		// phuong thuc xoa
		public function DeleteData($id,$nametable)
		{
			$sql = "DELETE from dulieu WHERE id='$id'";
			return $this->execute($sql);
		}
	}
 ?>