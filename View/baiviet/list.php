<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}

	body{
		box-sizing: border-box;
		width: 100%;
	}
	.danhsach{
		width: 100%;
		height: auto;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	th{
		text-align: center;
	}
	td{
		min-width: 150px;
		text-align: center;
	}
</style>
<body>
	<div class="container">
		<div class="danhsach">
			<h3>Danh sách bài viết</h3>
			<table border="1px">
				<thead>
					<tr>
						<th>id</th>
						<th>Link ảnh</th>
						<th style="width: 300px">Tiêu đề</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data as $value) {
					?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['linkanh'] ?></td>
						<td><?php echo $value['tieude'] ?></td>
						<td align="center">
							<a style="margin-right: 20px;" href="index.php?controller=baiviet&action=edit&id=<?php echo $value['id'] ?>">edit</a>
							<a onclick="return confirm('bạn có chắc chắn xóa không ?')" href="index.php?controller=baiviet&action=delete&id=<?php echo $value['id'] ?>" style="margin-right: :115px;">xoá</a>
						</td>
					</tr>
					<?php
						}  
					?>
					 
				</tbody>
				<a href="index.php?controller=baiviet&action=add" style="margin-bottom: 10px;">Thêm bài viết</a>
			</table>
		</div>
	</div>	
</body>
</html>

