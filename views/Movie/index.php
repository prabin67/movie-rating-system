<?php
   require_once "views/shared/menu.php";
?>

  <h1> Book Details Page </h1>

  <a href="Book/Insert" class="btn btn-primary"/>Add Book </a>

  <br> <br>

  <table class="table table-responsive table-stripped table-bordered">
  	<tr>
  			<th> SN </th>
  			<th> Book Name </th>
  			<th> Isbn No </th>
  			<th> Author </th>
  			<th> Publication </th>
  			<th>Action</th>
  	</tr>
     
    <?php  
		$sn=1;
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $sn; ?></td>
			<td><?php echo $row['bname']; ?></td>
			<td><?php echo $row['isbn']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td><?php echo $row['publication']; ?></td>
			<td>
				<a class="btn btn-primary" href="Book/Update?bid=<?php echo $row['bid'] ?>"> Update </a>
				<a class="btn btn-danger" href="Book/Delete?bid=<?php echo $row['bid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
			</td>
		</tr>

		<?php $sn++; }
	?>

  </table>
