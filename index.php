<!DOCTYPE HTML>
<html lang="en-US"> 
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>

	
	<h1 class="resss"></h1>
	

	<div class="data">
		<h2>Data Insert</h2>
		<hr />
		<form>
			<table>
				<tr> 
					<td>Name</td>
					<td><input name="name" type="text" /></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input name="email" type="text" /></td>
			</tr>
				<tr> 
					<td>Cell</td>
					<td><input name="cell" type="text" /></td>
				</tr>
				<tr> 
					<td></td>
					<td><input name="submit" type="submit" value="Insert Data" /></td>
				</tr>
			</table>
		</form>
	</div>
	
	
	 
	<div class="data-show"> 
		<table>
			<tr> 
				<td>Id</td>
				<td>Name</td>
				<td>Email</td>
				<td>cell</td>
				<td>Action</td>
			</tr>
			
			
			
		</table>
		<table id="datagola">
			
		</table>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
</body>
</html>