
<?php 
    require_once("includes/classes.php");
    ob_start();
    $cuisine = new Doing();
    $reserve = $cuisine->set_reservation();
    require_once('nav.php'); 
    $id = $info['id'];
    $get_reserve = $cuisine->get_reservation($id);
    isset($get_reserve['reserve_id']) ? $cuisine->header('usersetting') : "";
?>
<?php if(isset($info)) : ?>
    <div class="reservation-section sec-5p">
        <div class="container">
            <div class="reservation-container">
                <div class="reservation-left-corner">
                    <div class="reserve-title">
                        <h2 class="res-title">
                            Schedule your date now.
                        </h2>
                        <h5 class="res-subtitle">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ullam culpa tempora reprehenderit exercitationem accusantium esse et non quod ipsa molestias in, beatae cumque optio distinctio fuga facilis perferendis voluptatum?
                        </h5>
                        <h5 class="res-subtitle">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi rerum officiis suscipit, nemo velit consequatur molestias exercitationem nihil?
                        </h5>
                    </div>
                    <div class="reserve-advantage">
                        <h3 class="res-advantage">
                            What is the advantage?
                        </h3>
                        <h4 class="res-advantage-sub">
                            <span>1.</span> We can accompany you first.
                        </h4>
                        <h4 class="res-advantage-sub">
                            <span>2.</span> We reserve you in a good table.
                        </h4>
                        <h4 class="res-advantage-sub">
                            <span>3.</span> It seperated from other customer.
                        </h4>
                    </div>
                </div>
                <div class="reservation-right-corner">
                    <div class="reserve-right-container">
                        <div class="reserve-top-img">
                        </div>
                        <div class="reserve-form">
                            <form  method="post" class="reservation-form">
                                <div class="date-of-reservation">
                                    <h5 class="reserved-label">Date Of Reservation:</h5>
                                    <input class="reserved-date" type="date" name="reserve_date" placeholder="00 / 00 / 00">
                                    <input type="hidden" name="fullName" value="<?php echo $info['fullName'];?>">
                                    <input type="hidden" name="email" value="<?php echo $info['email'];?>">
                                    <input type="hidden" name="reserve_id" value="<?php echo $info['id'];?>">
                                </div>
                                <div class="time-of-reservation">
                                    <h5 class="reserved-label">Time of Reservation:</h5>
                                    <select name="reserve_time" class="reserve-time" value="<?php echo $reserve['reserve_time'] ?? "" ?>">
                                        <option value="">------</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                    </select>
                                </div>
                                <div class="people-in-reservation">
                                    <h5 class="reserved-label">Number of People: </h5>
                                    <input type='number' name='number-of-people' value="0" class='reserve-number' min='1' max='100'>
                                </div>
                                <div class="reserved-btn">
                                    <button type="submit" class="reserved-button" name="reserve_sbmit">CONFIRM</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php  else : ?>
<?php  $cuisine->header('log_in');

ob_end_flush();  ?>
<?php endif ?>

<?php
    require_once("footer.php");
?>