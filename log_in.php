

<?php
    require_once("includes/classes.php");
    $cuisine = new Doing();
    $register = $cuisine->log_in();
    
    if(isset($register)){
        $cuisine->header("index");
    }
?>


<?php require_once("nav.php"); ?>


    <section class="log-in-sec sec-5p">
        <div class="container">
            <div class="form-login-container">
                <div class="login-img">
                    <img src="images/food-login.png" alt="LOGIN PICTURE">
                </div>
                <div class="login-form-container">
                    <form  method="post">
                        <div class="login-input-container">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Enter Your Email" value="">
                        </div>
                        <div class="login-input-container">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="login-submit">
                            <button type="submit" class="login-btn" name="sbmit">Sign In</button>
                        </div>  
                        <div class="login-create">
                            <h5 class="login-text">Create an Account?</h5>
                            <a href="registration.php" class="login-link">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php require_once 'footer.php'; ?>