<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php include_once 'connection.php';
echo $edit_id=$_GET['edit_id'];
$Select="SELECT * FROM Registration WHERE id='$edit_id' ";
$query=mysqli_query($conn,$Select);
$row=mysqli_fetch_array($query);
echo $row['user_fname'];
?>
 <form class="mx-1 mx-md-4" action="form-handler.php" method="POST">
 					<input type="hidden" name="id" value="<?php echo $edit_id?>">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="userfname" class="form-control" / placeholder="Enter your first name" value="<?php echo $row['user_fname'] ?>" required>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="userlname" class="form-control" / placeholder="Enter your last name" value="<?php echo $row['user_lname'] ?>" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="useremail" class="form-control" / placeholder="Enter your Email" value="<?php echo $row['user_email'] ?>" required>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-success btn-lg" name="formupdate">Update</button>
                  </div>

                </form>