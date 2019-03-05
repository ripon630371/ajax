<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insert Data Ajax</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<?php

		include dirname(__FILE__)."/functions.php";
		$obj = new ajax();

		if(isset($_POST['submit']) AND $_SERVER['REQUEST_METHOD'] == "POST" ){
			$name  	= $_POST['name'];
			$email 	= $_POST['email'];
			$cell 	= $_POST['cell'];

			if(empty( $name ) || empty( $email ) || empty( $cell )){
				echo "<h2 style ='color: red;'> File Must Be Not Empty</h2>";
			}else{
				$data = $obj -> dataInsert($name,$email,$cell);
				echo $data;
			}

		}
	?>

	<div class="data">
		<h2>Insert Data</h2>
		<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<table>
				<tr>
					<td>Name </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Cell </td>
					<td><input type="text" name="cell"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Insert Data"></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="show-data">
		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Cell</th>
				<th>Action</th>
			</tr>
			<?Php
				$show = $obj -> datashow();
				while($dd = $show-> fetch_assoc()):
			?>
			<tr>
				<td><?php echo $dd['id'];?></td>
				<td><?php echo $dd['name'];?></td>
				<td><?php echo $dd['email'];?></td>
				<td><?php echo $dd['cell'];?></td>
				<td><a href="#">Edit</a>/<a href="#">Dlete</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>
</body>
</html>