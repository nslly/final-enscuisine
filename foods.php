<?php require_once('nav.php');  
?>

    <section class="foods sec-5p">
        <div class="container">
            <div class="foods-filter">
                <div class="foods-category">
                    <h2 class="foods-category-text">
                        Category: 
                    </h2>
                    <select name="food-select" id="food-select">
                        <option class="food-category"  value="all">All</option>
                        <option class="food-category"  value="pork">Pork</option>
                        <option class="food-category"  value="beef">Beef</option>
                        <option class="food-category"  value="chicken">Chicken</option>
                        <option class="food-category"  value="seafood">Seafood</option>
                        <option class="food-category"  value="vegetables">Vegetables</option>
                    </select>
                </div>
            </div>
            <div class="underlined"></div>
            <div id="sales">
                <div class="table_food">
                    <?php foreach ($getData as $data) {
                        if($data['sales']) {  ?>
                            <form  method="post" class="foods-form">
                            <?php
                                $price = ((str_replace('%',"",$data['sales']) / 100) * $data['price']); // percentage to decimal value
                                $total = round($data['price'] - $price);
                                $cuisine->display_foods($data['name_img'], $data['name'],$total, $data['name'], $total, $data['name_img'],$data['sales'],$data['price']);
                            ?>
                            </form>
                        <?php
                        }    
                    } ?>
                </div>
            
                <div class="all-foods">
                    <div class="table_food">
                        <?php foreach ($getData as $data) {
                            if($data['category'] == "chicken") {
                                if(!$data['sales']) { ?>
                                    <form method="post" class="foods-form">
                                    <?php
                                        $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                            else if ($data['category'] == "pork") {
                                if(!$data['sales']) { ?>
                                    <form method="post" class="foods-form">
                                    <?php
                                        $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                            else if ($data['category'] == "beef") {
                                if(!$data['sales']) { ?>
                                    <form method="post" class="foods-form">
                                    <?php
                                        $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                            else if ($data['category'] == "seafood") {
                                if(!$data['sales']) { ?>
                                    <form method="post" class="foods-form">
                                    <?php
                                        $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                            else if ($data['category'] == "vegetables") {
                                if(!$data['sales']) { ?>
                                    <form method="post" class="foods-form">
                                    <?php
                                        $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                        } ?>
                    </div>
                </div>
            </div>
            <div id="foods_container"></div>
        </div>
    </section>
<?php require_once 'footer.php'; ?>