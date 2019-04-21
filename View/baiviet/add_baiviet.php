<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Thêm bài viết</title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}

	body{
		box-sizing: border-box;
		width: 100vw;
	}

	.thembaiviet{
		width: 100%;
		height: auto;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	
	table{
		width: 600px;
	}
	table, tr{
		width: 100%;
		height: 40px;
		
	}
	input{
		width: 400px;
	}

	textarea{
		width: 400px;
		height: 250px;
	}

	#btn-submit{
		width: 80px;
		height: 40px;
		margin-top: 15px;
		float: right;
	}


</style>
<body>
	<div class="thembaiviet">
			<form action="" method="POST">
					<h3>Thêm bài viết</h3>
					<a href="index.php?controller=baiviet&action=list">Danh sách bài viết</a>
					<table>
						<tr>
							<td>Link ảnh</td>
							<td><input type="text" name="linkanh"></td>
						</tr>
						<tr>
							<td>Tiêu đề</td>
							<td><input type="text" name="tieude"></td>
						</tr>
						<tr>
							<td style="float:left;">Nội dung</td>
							<td><textarea name="noidung" type="text"></textarea>></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input onclick="return confirm('bạn có chắc thêm không?')" id="btn-submit" type="submit" name="add_baiviet" value="Thêm mới"></td>
						</tr>
				</table>
			</form>
	</div>
</body>
</html>