<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2</title>
</head>
<body style="margin-left: 40%;">
	<p style="margin-left: 65px"><big><b>Form vẽ bảng</b></big></p>
	<form id="form" name="form" method="post" action="">
		<table>
				<tr>
					<td>Số dòng </td>
					<td><input type="text" name="rows" id="rows" required></td>
				</tr>
			<tbody>
				<tr>
					<td>Số cột </td>
					<td><input type="text" name="cols" id="cols" required></td>
				</tr>
			</tbody>
			<tr>
				<td><input type="submit" value="Vẽ" name="draw"></td>
			</tr>

		</table>
	</form>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST['draw']))
{

	$rows = $_POST["rows"];
	$cols = $_POST["cols"]; 
	
}
?>
	
	<?php
		for ($i = 1; $i <= $rows; $i++) 
		{
			echo '<table border="1"  width="300px" style="height: 50px">';
			echo '<tr>';
			for ($j = 1; $j <= $cols; $j++	) 
			{
				
				echo '<td>';
				echo '</td>';
				
			}
			echo '</tr>';
			echo '</table>';
		}
		
	?>
		</table>
