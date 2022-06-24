<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include_once 'connection.php';
$Select="SELECT * FROM Registration";
$Query=mysqli_query($conn, $Select);
?>
<section class="vh-140" style="background-color:#add8e6;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="form-handler.php" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="userfname" class="form-control" / placeholder="Enter your first name" required>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="userlname" class="form-control" / placeholder="Enter your last name" required>
                    </div>
                  </div>
                   <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="usercnic" class="form-control" placeholder="Enter your CNIC" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="useremail" class="form-control" / placeholder="Enter your Email" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="userpass" class="form-control" placeholder="Enter your password" required>
                    </div>
                  </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                    <p>Select your gender</p>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-5">
                  <label for="male"> 
                    <input type="radio" name="gender" value="male" required> Male
                  </label>
                  <label for="female"> 
                    <input type="radio" name="gender" value="female" required> Female
                  </label>
                  <label for="other">  
                    <input type="radio" name="gender" value="other" required> Other
                  </label>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" required>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!" style="text-decoration: none;">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="formsubmit">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/register.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($Query)) {


                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['user_fname'] ?></td>
                            <td><?php echo $row['user_lname'] ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td>
                                <a href="edit.php?edit_id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?del_id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>
</html>