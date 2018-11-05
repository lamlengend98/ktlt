<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Bài 3</title>
</head>
<body>
	<form action="" method="get" id="form" accept-charset="utf-8">
		
		<table  style="margin-left: 40%">
			<p style="margin-left: 47%"><big><b>Đăng Ký</b></big></p>
			<tbody>
				<tr>
					<td>Mã SV: </td>
					<td><input type="text" name="id" id="id" required></td>
				</tr>
				<tr>
					<td> Họ tên: </td>
					<td><input type="text" name="name" id="name" required></td>
				</tr>
				<tr>
					<td>Ngày sinh: </td>
					<td><input type="date" name="date" id="date" required></td>
				</tr>
				<tr>
					<td>Giới tính: </td>
					<td><input type="radio" name="gender" value="Nam" >Nam
					<input type="radio" name="gender" value="Nữ" required>Nữ</td>
				</tr>
				<tr>
					<td>Nơi Sinh: </td>
					<td><input type="text" name="ba" id="ba" required></td>
				</tr>
				<tr>
					<td>Lớp: </td>
					<td><input type="text" name="class" id="class" required></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><button type="reset" name="reset">Nhập lại</button></td>
					<td colspan="" rowspan="" headers=""><button type="submit" name="submit">Đăng ký</button></td>
				</tr>
			</tbody>

		</table>
	</form>



<?php 
	error_reporting(0);
	if (isset($_GET['submit'])) {
		$id = $_GET['id'];
		$name = $_GET['name'];
		$date = $_GET['date'];
		$gender = $_GET['gender'];
		$ba = $_GET['ba'];
		$class = $_GET['class'];

	}
?>



<table style="margin-left: 250px !important" cellpadding="0.5em" border="1" cellspacing="0" width="1000px">
	<tr>
		<th>Mã SV</th>
		<th>Họ tên</th>
		<th>Ngày sinh</th>
		<th>Giới tính</th>
		<th>Nơi sinh</th>
		<th>Lớp</th>
	</tr>
	<tr>
		<td><p align="center"><?php echo $id; ?></p></td>
		<td><p align="center"><?php echo $name; ?></p></td>
		<td><p align="center"><?php echo $date; ?></p></td>
		<td><p align="center"><?php echo $gender; ?></p></td>
		<td><p align="center"><?php echo $ba; ?></p></td>
		<td><p align="center"><?php echo $class; ?></p></td>
	</tr>
</table>
</body>
</html>