<?php require_once("includes/classes.php"); 
    $cuisine = new Doing();
    $getData = $cuisine->getting_data();    
    $foods = $cuisine->foods_data();    
?>


        <?php if(!isset($foods)) { ?>
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

        <?php } else {?>
            <div class="table_food">
                <?php foreach ($foods as $data) { ?>
                    <form method="post" class="foods-form">
                        <?php if(!$data['sales']) {
                            $cuisine->foods_display($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img']);
                        } else {?>
                        <?php
                            $price = ((str_replace('%',"",$data['sales']) / 100) * $data['price']); // percentage to decimal value
                            $total = round($data['price'] - $price);
                            $cuisine->display_foods($data['name_img'], $data['name'],$total, $data['name'], $total, $data['name_img'],$data['sales'],$data['price']);
                        } ?>
                    </form>
                <?php  
                }  
        } ?>
        </div>
