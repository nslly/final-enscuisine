<?php require_once('nav.php');  
?>
<main>
    <section class="hero">
        <div class="container">
            <div class="text-content">
                <div class="hero-main-text">
                    <h1>It's not just</h1>
                    <h1>Food, It's an</h1>
                    <h1> Experience.</h1>
                    <div class="btn-hero-text">
                        <a href="#food-list-first"><span class="hero-btn hero-btn-main cursor-pointer">Get Started</span></a>
                        <a href="foods.php"><span class="hero-btn hero-btn-sub cursor-pointer">View Menu</span></a>
                    </div>
                </div>
                <div class="hero-main-img">
                    <img src="images/dating-3.png" alt="Hero-Image" class="hero-img">
                    .
                </div>
            </div>
        </div>
        

    </section>


    

    <section class="food-list sec-5p" id="food-list-first">
        <div class="container">
            <div class="food-title">
                <h1 class="food-main-title">
                    Our Delicous Food Sale
                </h1>
                <h4 class="food-sub-title">
                    The foods that can bring you in a paradise.
                </h4>
            </div>
            <div class="food-container">
                
                <ul id="autoWidth" class="cs-hidden">
                    <?php foreach ($getData as $data) {
                    if($data['sales']) {  ?>
                    <li class="items">
                        <form action="foods.php" method="post">
                            <?php
                                $price = ((str_replace('%',"",$data['sales']) / 100) * $data['price']); // percentage to decimal value
                                $total = round($data['price'] - $price);
                                $cuisine->display_foods($data['name_img'], $data['name'],$total, $data['name'], $total, $data['name_img'],$data['sales'],$data['price']);
                            ?>
                        </form>
                    </li>
                        <?php
                        }    
                    } ?>
                </ul>
                
            </div>
        </div>
    </section>



    
    <section class="chef sec-5p">
        <div class="container">
            <div class="chef-container">
                <div class="chef-title">
                    <h1 class="chef-main-title">
                        Cooked by the <span style="display:block">Best Chefs in the</span> World.
                    </h1>
                    <h3 class="chef-sub-title">
                        We make our food delicious and presentable.
                    </h3>

                    <h4 class="chef-sub-title">
                        "Cooking is like love, it should be entered <spa style="display:block">into with complete abandon or not at all". </span> 
                    </h4>
                </div>
                <div class="chef-img-container">
                    <img src="images/chef-2.png" alt="Chef Photo" class="chef-img">
                </div>
            </div>
        </div>
    </section>


    <section class="what-we-serve sec-5p">
        <div class="container">
            <div class="serve-title">
                <h1 class="serve-main-title">
                    What We Serve
                </h1>
                <h4 class="serve-sub-title">
                    The restaurant that always people choice.
                </h4>
            </div>
            <div class="serve-container">
                <div class="serve-list">
                    <div class="serve-img">
                        <img src="images/quality-img.svg" alt="Best Quality Photo">
                    </div>
                    <h2 class="serve-text">
                        Best Quality
                    </h2>
                </div>
                <div class="serve-list">
                    <div class="serve-img">
                        <img src="images/delivery-img.svg" alt="Delivery Photo">
                    </div>
                    <h2 class="serve-text">
                        Fast Delivery
                    </h2>
                </div>
                <div class="serve-list">
                    <div class="serve-img">
                        <img src="images/afford-img.svg" alt="Affordable Photo">
                    </div>
                    <h2 class="serve-text">
                        Affordable
                    </h2>
                </div>
            </div>
        </div>
    </section>



    <section id="reserved" class="sec-5p">
        <div class="container">
            <div class="reserved-title">
                <h1 class="reserved-main-title">
                    Reserved Your Table
                </h1>
                <h4 class="reserved-sub-title">
                    An extra ordinary service and comfortable seat.
                </h4>
            </div>
            <div class="reserved-container">
                <div class="reserved-text-container">
                    <div class="reserved-text-main">
                        <h1 class="reserved-main-text">
                            <span class="reserved-big">
                                Eat. 
                            </span>
                            <span class="reserved-big">
                                Drink.
                            </span> 
                            <span class="reserved-big reserved-last">
                                Love.
                            </span>
                        </h1>
                    </div>
                    <div class="reserved-btn-click">
                        <a href="reservation.php">
                            <span class="reserved-btn-clk cursor-pointer">
                                Book Now
                            </span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    

    <section id="review-section" class="sec-5p">
        <div class="container">
            <div class="review-title">
                <h1 class="review-main-title">
                    Recent Review
                </h1>
                <h4 class="review-sub-title">
                    from our satisfied customer.
                </h4>
            </div>
            <div class="reviewed-container">
                <div class="reviewed-img-text">
                    <div class="reviewed-img-txt">
                        <div class="reviewed-img review-1">
                        </div>
                        <div class="reviewed-name">
                            <h2 class="reviewed-name-text">
                                Sophia Santos
                            </h2>
                            <h4 class="reviewed-life-text">
                                Teacher
                            </h4>
                        </div>
                    </div>
                    <div class="reviewed-stars">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="reviewed-comment">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure aperiam architecto illum inventore porro dolore dolor.
                        </p>
                    </div>
                </div>
                <div class="reviewed-img-text">
                    <div class="reviewed-img-txt">
                        <div class="reviewed-img review-2">
                        </div>
                        <div class="reviewed-name">
                            <h2 class="reviewed-name-text">
                                Sebastian Legaspi
                            </h2>
                            <h4 class="reviewed-life-text">
                                Plumber
                            </h4>
                        </div>
                    </div>
                    <div class="reviewed-stars">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star-half"></i></span>
                    </div>
                    <div class="reviewed-comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cupiditate explicabo veritatis natus ab quidem. Inventore!
                        </p>
                    </div>
                </div>
                <div class="reviewed-img-text">
                    <div class="reviewed-img-txt">
                        <div class="reviewed-img review-3">
                        </div>
                        <div class="reviewed-name">
                            <h2 class="reviewed-name-text">
                                Alexandra Cruz
                            </h2>
                            <h4 class="reviewed-life-text">
                                Factory Worker
                            </h4>
                        </div>
                    </div>
                    <div class="reviewed-stars">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="reviewed-comment">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eius adipisci perspiciatis aliquid unde, minima corporis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- MAPS SECTION  --->


    <section id="maps-section" class="sec-5p">
        <div class="container">
            <div class="maps-title">
                <h1 class="maps-main-title">
                    Our Location
                </h1>
                <h4 class="maps-sub-title">
                    You can find us here.
                </h4>
            </div>

            <div class="maps-container">
                <div class="maps-text">
                    <h2 class="maps-where">
                        Lot Number: <span class="maps-loc" style="display:block">#104</span>
                    </h2>
                    <h2 class="maps-where">
                        Street:  <span class="maps-loc" style="display:block"> Sandatahan </span>
                    </h2>
                    <h2 class="maps-where">
                        Barangay:  <span class="maps-loc" style="display:block"> San Carlos </span>
                    </h2>
                    <h2 class="maps-where">
                        Town:  <span class="maps-loc" style="display:block"> Mariveles </span>
                    </h2>
                    <h2 class="maps-where">
                        Province:  <span class="maps-loc" style="display:block"> Bataan </span>
                    </h2>
                    <div class="maps-num">
                        <h4 class="maps-telephone-num">
                            Telephone Number: <span style="display:block; color: #ff4155">(02) 53-940-65</span>
                        </h4>
                        <h4 class="maps-contact-num">
                            Contact Number: <span style="display:block; color: #ff4155">(+63) 954-5541-233</span>
                        </h4>
                    </div>
                </div>
                <div class="maps-contain">
                    <iframe
                        class="maps-loc"
                        width="100%"
                        height="500"
                        frameborder="1"
                        src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCr5ta1PIkFswTwijqB5d3d_mpk5YRXS0c
                        &zoom=15
                        &origin=14.449662,120.520507
                        &destination=14.436072,120.487221" allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </section>

</main>

<?php require_once 'footer.php'; ?>