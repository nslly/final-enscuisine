
<?php 
    
    require_once("includes/classes.php");
    $cuisine = new Doing();
    $register = $cuisine->register();
    require_once('nav.php'); 
?>

    <section class="log-in-sec sec-5p">
        <div class="container">
            <div class="form-login-container">
                <div class="login-img">
                    <img src="images/food-login.png" alt="LOGIN PICTURE">
                </div>
                <div class="login-form-container">
                    <form  method="post">
                        <div class="login-input-container">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" placeholder="Enter Your first name">
                        </div>
                        <div class="login-input-container">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" placeholder="Enter Your last name">
                        </div>
                        <div class="login-input-container">
                            <label for="regemail">Email:</label>
                            <input type="email" name="regemail" placeholder="Enter Your Email">
                        </div>
                        <div class="login-input-container">
                            <label for="regpassword">Password:</label>
                            <input type="password" name="regpassword" placeholder="Enter Your Password">
                        </div>
                        <div class="login-input-container">
                            <label for="regrepassword">Confirm your Password:</label>
                            <input type="password" name="regrepassword" placeholder="Confirm Password">
                        </div>
                        <div class="login-submit">
                            <button type="submit" class="login-btn" name="sbmitreg">Submit</button>
                        </div>  
                        <div class="login-create">
                            <h5 class="login-text">Already have an account?</h5>
                            <a href="log_in.php" class="login-link">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once("footer.php"); ?>