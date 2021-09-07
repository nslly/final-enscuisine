<?php 
    require_once("nav.php");

    $id = $info['id'] ?? "";
    $user_reserved = $cuisine->get_reservation($id);
?>

<section class="user-info">
    <div class="container">
        <div class="user-setting-container">
            <div class="user-left-corner">
                <img src="images/candidate.png" alt="Image">
            </div>
            <div class="user-right-corner">
                <div class="user-right-container">
                    <div class="user-image">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <div class="user-info">
                        <h3 class="user-info-text">Hi, <span class="user-name"><?php echo $info['fullName'] ?? ""; ?></span></h3>
                    </div>
                    <div class="user-underline"></div>
                    <h3 class="user-reservation-text">
                        Reservation
                    </h3>
                    <div class="user-reserved">
                        <h4 class="user-reserve-date">
                            <i class="far fa-calendar-alt user-i"></i>Date: <?php echo $user_reserved['reserve_date'] ?? ""?>
                        </h4>
                        <h4 class="user-reserve-time">
                            <i class="far fa-clock user-i"></i>Time: <?php echo $user_reserved['reserve_time'] ?? "" ?>
                        </h4>
                        <h4 class="user-reserve-table">
                        <i class="fas fa-users user-i"></i>Person in Table: <?php echo $user_reserved['reserve_table'] ?? "" ?>
                        </h4>
                        <div class="user-edit-info">
                            <div class="user-edit-button">
                                <button class="user-edit">
                                    <a href="resupdate.php" id="resUpdate">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </button>
                                <button class="user-confirm cursor-pointer">
                                    <i class="fas fa-check"> </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>


<?php
    require_once("footer.php");
?>

