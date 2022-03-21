<?php
      include ('include/connect.php');

      session_start();
      if(isset($_SESSION['logged'])){
        header("location: index.php");
      }
      include 'include/user.php';
      
      if(isset($_POST['submit_admin'])){
      $email = $conn->real_escape_string($_POST['email']);
      $password = $conn->real_escape_string($_POST['password']);
      $res=json_decode(login($conn,$email,$password));
        if(sizeof($res) > 0){
          

          $_SESSION['logged']=true;
          $_SESSION['id'] = $res[0] -> id;

          header("location: index.php");
        }else{
            echo '<script type="text/javascript">alert("Username or Password was incorrect.")</script>';
          header("location: login.php");

          }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="images/clsu-logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Language and Literature - Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success"><center><img src="images/clsu-logo.png" class="avatar" height="30%" width="30%">
                                <h2 style="color: white;">Language and Literature <br> e-Learning</h2></center>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group"><label class="medium mb-2" for="inputEmailAddress">Email</label><input class="form-control py-3" type="email" name="email" placeholder="Enter email address" /></div>
                                            <div class="form-group"><label class="medium mb-2" for="inputPassword">Password</label><input class="form-control py-3" type="password" name="password" placeholder="Enter password" /></div>
                                            
                                            <div class="form-group mt-4 mb-0 ">
                                            <input type="submit" class="btn btn-success float-right" name="submit_admin" value="Login">
                                          </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">Copyright © 2022. All rights reserve!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
