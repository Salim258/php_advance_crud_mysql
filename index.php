<?php 
  include ('inc/header.php'); 
  include ('action.php');
  // require ('config/config.php');
?>

<body>
 <div class="container-fluid">
  <div class="row justify-content-center">
  	<div class="col-md-10">
 	   <h3 class="text-center text-dark mt-3">Advance CRUD App Using PHP & MySQLI Prepared Statement(OOP)</h3> 
 	   </div>

     <?php if(isset($_SESSION['response'])) { ?>

     <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">

     <button class="close" type="button" data-dismiss="alert">&times;</button>

     <b class="text-center"><?= $_SESSION['response']; ?></b>

     </div>

     <?php } unset($_SESSION['response']); ?>

  </div>

<!-- <h1 class="h1">hello</h1> --> <!-- style.css test -->
	<div class="row">
		<div class="col-md-4"><hr>
			<h3 class="text-center text-info">Add Record</h3>	
			<form action="action.php" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?= $id; ?>">
				<div class="form-group">
					<input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="Name" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
					<input type="phone" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="Enter Phone" required>
				</div>
				<div class="form-group">
          <input type="hidden" name="oldimage" value="<?= $photo; ?>">
					<input type="file" name="image" class="custom-file">
          <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
				</div>
				<div class="form-group">
        <?php if ($update==true) { ?> 
          <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record" placeholder="Update">  
        <?php } else { ?> 
					<input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record" placeholder="Name">
        <?php } ?>
				</div>
			</form>
		</div>
		<div class="col-md-8">
      <?php 
        $query = "SELECT * FROM adv_crud";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
      ?>
		<hr>
		 <table class="table table-dark table-hover">
     <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th><center>Action</center></th>
      </tr>
     </thead>
     <tbody>
      <?php while ($row=$result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><img src="<?= $row['photo']; ?>" width="40" alt=""></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td> 
          <center>

          	<a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2" name="details">Detail</a> |

          	<a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want to delete this record');"> Delete</a> |

          	<a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a> 

          </center>
        </td>
      </tr>
      <?php } ?>
     </tbody>
  	 </table> 
		</div>
    
	</div><!-- row  -->
 </div><!-- container-fluid -->

</body>
</html>