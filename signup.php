<?php  include "functions/db.php"; ?>
<?php include "functions/addUsers.php";
createUser();
?>

<?php
$title = "Sign Up";
include "includes/header.php";?>
      <div class="center">        
         
         <div class="container">
            
            <div class="text">
               Sign Up
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
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="submit" value="submit">Sign Up</button>
               </div>
               <div class="signup-link">
                  Already a member? <a href="index.php">Sign In Now</a>
               </div>
            </form>
         </div>
      </div>
<?php include "includes/footer.php"; ?>
