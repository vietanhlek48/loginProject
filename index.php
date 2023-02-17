<?php  include "functions/db.php"; ?>
<?php include "functions/funtion.php";
createUser();
?>

<?php
$title = "Sign In";
include "includes/header.php";?>
      <div class="center">        
         
         <div class="container">
            
            <div class="text">
               Sign Ip
            </div>
            <form action="signup.php" method="post">
               <div class="data">
                  <label>Name</label>
                  <input type="text" name="name" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" required>
               </div>
               <div class=".dont-have-acc">
                  <a href="signup.php">Don't Have Account?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="submit" value="submit">login</button>
               </div>
               <div class="signup-link">
                  Don't have account? <a href="signup.php">Sign In Now</a>
               </div>
            </form>
         </div>
      </div>
<?php include "includes/footer.php"; ?>
