<?php 

include_once("config.php");

$result = mysqli_query( $mysqli, "select * from user order by nama");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Awal</title>

 	<link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 	<br/>
 	<div class="masonry-item col-md-12">
	    <div class="bgc-white bd bdrs-3 p-20 mB-20">
	        <div class="c-btn">
 				<a href="tambah.php">Add New User</a>
	        </div><br/>
		 	<table class="table table-striped table-bordered">
		 		<thead>
		 			<th>Nomor</th>
		 			<th>Nama</th>
		 			<th>Username</th>
		 			<th>Password</th>
		 			<th>Email</th>
		 			<th>Action</th>
		 		</thead>
		 		<?php 
		 		while($data = mysqli_fetch_array($result)) {
		 			$i=1;
		 			echo "<tr>";
					echo "<td>".$i."</td>"; 			        
			        echo "<td>".$data['nama']."</td>";
			        echo "<td>".$data['username']."</td>";
			        echo "<td>".$data['password']."</td>";
			        echo "<td>".$data['email']."</td>";
			        echo "<td><a href='edit.php?id=$data[username]'>Edit</a> | <a href='hapus.php?id=$data[username]'>Delete</a></td></tr>"; 
		 			
		 		 }
		 		 ?>
		 	</table>
		 </div>
	</div>
 
 </body>
 </html>