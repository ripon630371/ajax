			<?php 
			
				include dirname(__FILE__)."/functions.php";
	
				$obj = new Ajax();
				
				$show = $obj -> dataShow();
				
				while( $dd = $show -> fetch_assoc() ) :
			?>
			<tr> 
				<td><?php echo $dd['id']; ?></td>
				<td><?php echo $dd['name']; ?></td>
				<td><?php echo $dd['email']; ?></td>
				<td><?php echo $dd['cell']; ?></td>
				<td> <a href="">Edit</a> / <a href="#">Delete</a></td>
			</tr>
			
			<?php endwhile; ?>