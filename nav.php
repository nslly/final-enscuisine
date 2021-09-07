<?php require_once('header.php'); ?>

<header class="header">
    <div class="container">
        <nav class="nav">
            <div class="logo-header">
                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="LOGO" class="img-logo">
                    <h3>E<span>ate</span>ry</h3>
                </a> 
            </div>
            <ul class="nav-lists">

                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>            
                <li class="nav-item">
                    <a href="foods.php" class="nav-link">Foods</a>
                </li>
                <li class="nav-item">
                    <a href="#reserved" class="nav-link">Reservation</a>
                </li>       
                <li class="nav-item">
                    <a href="#review-section" class="nav-link">Reviews</a>
                </li>       
                <li class="nav-item">
                    <a href="#maps-section" class="nav-link">Location</a>
                </li>                  
            </ul>

            <div class="log-in">
                <span class="person">
                    <?php if(isset($info)) : ?>
                        <a href="add_cart.php"><i class="fas fa-shopping-bag">
                            <span>
                                <?php 
                                    if(isset($_SESSION['foods'])) {
                                        $total = count($_SESSION['foods']); 
                                        echo $total;
                                    } else {
                                        echo "";
                                    }
                                ?>
                            </span>
                        </i></a>
                        <ul class="info-person">
                            <li class="info-person-li">
                                <i class="fas fa-cog"></i>
                                <div class="info-person-container">
                                    <ul class="log-out-and-info">
                                        <li><a href="usersetting.php" class="info-setting-interface info-person-inter">User Info</a></li>
                                        <div class="underlined-2"></div>
                                        <li class="signout-log"><a href="logout.php" class="log-out-btn-interface info-person-inter">Logout <i class="fas fa-sign-out-alt"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- <a href="usersetting.php" class="info_person"></a> -->
                        
                    <?php else : ?>
                        <a href="log_in.php"><i class="fas fa-shopping-bag"></i></a>
                        <a href="log_in.php"><span class="log-in-btn">Sign In</span></a>
                    <?php endif ?>
                </span>
            </div>
        </nav>
        
    </div>
</header>
<div class="hamburger-menu">
    <span class="hamburger"><i class="fas fa-bars"></i></span>
</div>


