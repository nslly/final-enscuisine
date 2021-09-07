<?php require_once('nav.php');  
?>

<section class="final-cart sec-5p">
    <div class="container">
        <div class="cart-flex">
            <div class="cart-divide">
                <div class="final-cart-container">
                    <div class="final-cart-title">
                        <h2 class="title-cart">Food Basket</h2>
                    </div>
                    <?php 
                        if(isset($_SESSION['foods'])) {
                            foreach($_SESSION['foods'] as $key => $value) { ?>
                                <div class="final-cart-table">
                                    <div class="cart-image">
                                        <img src="images/foods/<?php echo $value['img_foods'];?>" alt="cart foods">
                                    </div>
                                    <div class="cart-food-details">
                                        <h2 class="cart-image-title">
                                            <?php echo $value['name_foods'];?>
                                        </h2>
                                        <h5 class="available">
                                            Available
                                        </h5>
                                        <div class="cart-quantity">
                                            <h3 class="quantity">Quantity:</h3>
                                            <h4 class="quantity-value"><?php echo $value['add_subtract'];?></h4>
                                        </div>
                                        <h3 class="cart-price">
                                            ₱<?php echo $value['price'];?>
                                        </h3>
                                    </div>
                                    <div class="cart-delete-btn">
                                        <form method="POST" class="cart-form">
                                            <input type="hidden" name="name_food" value="<?php echo $value['name_foods']; ?>">
                                            <button name="delete_tr"><i class="fas fa-backspace"></i></button>
                                        </form> <!--    DELETING THE ONE ITEM IN A CART  -->
                                    </div>
                                </div>
                    <?php   }
                        } ?>
                </div>
                <div class="final-total-cost">
                    <div class="final-label-amount">
                        <p>Total Amount:</p>
                    </div>
                    <div class="final-value-amount">
                        <form method="POST">
                        <?php 
                            if(isset($_SESSION['foods'])) {
                                $total = 0;
                                foreach($_SESSION['foods'] as $key => $value) {
                                    $total += $value['price'] * $value['add_subtract']; 
                        ?>
                            <input type="hidden" name="name_foods[]" value="<?php echo $value['add_subtract'], $value['name_foods']; ?>">
                        <?php   } ?> <!-- End of if isset -->
                            <input type="hidden" name="name" value="<?php echo $info['fullName']; ?>">  
                            <?php echo $total; ?> Pesos
                            <?php
                            if($total == 0) { ?>
                                <div class="final-submit-btn">
                                </div>
                        <?php  }
                            else {
                        ?>
                                <div class="final-submit-btn">
                                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                                    <button name="btn_foods_smt" class="cart-btn">Confirm</button>
                                </div>
                            <?php }
                            } // End of if statement ?>
                        </form>  
                    </div>
                    
                </div>      
            </div>
        </div>
    </div>
</section>


<?php require_once 'footer.php'; ?>