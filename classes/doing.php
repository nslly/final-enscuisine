<?php 
    class Doing extends Dbh {
        

        public function header($path) {
            header('Location:' . $path . '.php');
        }


        public function email_exist($email) {
            $conn = $this->conn();
            $sql = "SELECT * FROM register WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$email]);
            $count = $stmt->rowCount();

            return $count;
        }

        public function register(){
            if(isset($_POST['sbmitreg'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['regemail'];
                $password = md5($_POST['regpassword']);
                $repassword = md5($_POST['regrepassword']);
        
                if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($repassword)) {
                    
                    if(!preg_match('/^[a-zA-Z\s]+$/',$fname)) {
                        echo "<script> alert('First Name and Last Name are incorrect')</script>";
                    } else {
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<script> alert('Your Email is incorrect')</script>";
                        } else { 
                            if($this->email_exist($email) == 0) {
                                if($password == $repassword) {
                                    $conn = $this->conn();
                                    $sql = "INSERT INTO register(first_name,last_name,email,passwrd,confirm_pass) VALUES (?,?,?,?,?)";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->execute([$fname,$lname,$email,$password,$repassword]);
                                    echo "<script> alert('Your registration is successful.')</script>";
                                } else {
                                    echo "<script> alert('Your Password is not match')</script>";
                                }
                            } else {
                                echo "<script> alert('Your email is already taken.')</script>";
                            }   
                        }
                    }
                } else {
                    echo "<script> alert('Your sign-in form is empty. Please write it correctly.')</script>";
                }
            }
            
        }

        // login function 
        public function log_in() {
            if(isset($_POST['sbmit'])) {
                $email = $_POST['email'];
                $passwrd = md5($_POST['password']);
        
                if(!empty($passwrd) && !empty($email)) {
                    $conn = $this->conn();
                    $sql = "SELECT * FROM register WHERE email = ? AND passwrd = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$email,$passwrd]);
                    $user = $stmt->fetch();
                    $count = $stmt->rowCount();
                    
                    if($count > 0) {
                        return $this->set_full_name($user);
                        
                    } else {
                        echo "<script> alert('Failed to Login.')</script>";
                    }
                } else {
                    echo "<script> alert('Your email is empty fill up correctly.')</script>";
                }
        
            }
        }

        public function log_out() {

            $_SESSION['info'] = null;
            unset($_SESSION['info']);
            // session_unset();
            // session_destroy();
        }

        //set full Name of the user using session
        public function set_full_name($user) {

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['info'] = array(
                "fullName" => $user['first_name'] . " " . $user['last_name'],
                "id" => $user['id'],
                "email" => $user['email']
            );

            return $_SESSION['info'];
        }
        
        //get full Name of the user
        public function get_info() {
            if(!isset($_SESSION['info'])) {
                session_start();
            }

            if(isset($_SESSION['info'])){
                return $_SESSION['info'];
                
            }
        }

        // get the user email
        public function get_user($id) {
            $conn = $this->conn();
            $sql = "SELECT * FROM register WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            $user = $stmt->fetch();
            $result = $stmt->rowCount();

            if($result > 0 ){
                
                return $user;
            }

            
        }

        // Reservation.php ito 

        public function set_reservation() {

            if(isset($_POST['reserve_sbmit'])) {
                $reserve_date = $_POST['reserve_date'];
                $reserve_time = $_POST['reserve_time'];
                if(isset($_POST['number-of-people'])) {
                    $reserve_table = $_POST['number-of-people'];
                } else {
                    echo "";
                }
                
                $full_name = $_POST['fullName'];
                $email = $_POST['email'];
                $reserve_id = $_POST['reserve_id'];

                if(!empty($reserve_date) && !empty($reserve_time) && !empty($reserve_table)) {
                    $conn = $this->conn();
                    $sql = "INSERT INTO reservation(reserve_date, reserve_time, reserve_table, full_name, email, reserve_id) VALUES(?, ?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$reserve_date, $reserve_time, $reserve_table, $full_name, $email, $reserve_id]);
                    $this->header('usersetting');
                }  else {
                    echo "<script> alert('Your reservation form is empty. Please write it correctly.')</script>";
                }

                
            }
        }

        public function get_reservation($id) {
            $conn = $this->conn();
            $sql = "SELECT * FROM reservation WHERE reserve_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            $reservation = $stmt->fetch();
            $result = $stmt->rowCount();

            if($result > 0) {
                return $reservation;
            } else {
                echo FALSE;
            }
        }

        // edit the reservation in resUpdate.php 
        public function edit_reservation($id) {


            if(isset($_POST['reserve_update'])){

                $reserve_date_update = $_POST['reserve_date'];
                $reserve_time_update = $_POST['reserve_time'];
                if(isset($_POST['number-of-people'])) {
                    $reserve_table_update = $_POST['number-of-people'];
                } else {
                    echo "";
                }
                if(!empty($reserve_date_update) && !empty($reserve_time_update) && !empty($reserve_table_update)) {
                    $conn = $this->conn();
                    $sql = "UPDATE reservation SET reserve_date = ? , reserve_time = ?, reserve_table = ? WHERE reserve_id = $id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$reserve_date_update, $reserve_time_update, $reserve_table_update ]);
                    $this->header('usersetting');
                } else {
                    echo "<script> alert('Your reservation form is empty. Please write it correctly.')</script>";
                }
                
            }

        }

        // ajax calling the data from the server 
        // ginamit ko to kunin ang data ng mga foods sa database

        public function getting_data() {
            $conn = $this->conn();
            $sql = "SELECT * FROM foods";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $getData = $stmt->fetchAll();
            $result = $stmt->rowCount();

            if($result > 0) {
                return $getData;
            }

        }

        // KUKUNIN ANG MGA DETAILS SA ISANG SESSION['FOODS']
        public function get_foods_cart() {

            
            if(isset($_POST['add_to_foods'])) {
                if(isset($_SESSION['info'])) {
                    if(isset($_SESSION['foods'])){
                        $foods = array_column($_SESSION['foods'], 'name_foods');
                        if(in_array($_POST['name_foods'], $foods)) {
                            echo "<script>alert('This Food is already in your cart.')</script>";
                        } else {
                            $count = count($_SESSION['foods']);
                            $_SESSION['foods'][$count] = array(
                                "name_foods" => $_POST['name_foods'],
                                "price" => $_POST['price_foods'],
                                "img_foods" => $_POST['img_foods'],
                                "add_subtract" => $_POST['add_subtract']
                            );
                        }
                    } else {
                        $_SESSION['foods'][0] = array(
                            "name_foods" => $_POST['name_foods'],
                            "price" => $_POST['price_foods'],
                            "img_foods" => $_POST['img_foods'],
                            "add_subtract" => $_POST['add_subtract']
                        );
                    }
                } else {
                    $this->header('log_in');
                }
            } 
            
        }

        // Displaying the foods to make it not repetitive, pamapaikli pa, para sa sales food to
        public function display_foods($img_path,$img_name,$img_price,$hidden_name,$hidden_price,$hidden_img,$sales,$real_price) {
            $element = "
                <div class='food-box'>
                    <div class='food-img'>
                        <img src='images/foods/$img_path' alt='FOODS'>
                    </div>
                    <div class='food-name'>
                        <h3>$img_name</h3>
                        <h5>Lorem, ipsum dolor sit amet consectetur adipisicing.</h5>
                    </div>
                    <div class='food-price'>
                        <h3 class='food-real'>₱$real_price</h3>
                        <h3 class='food-sales'>$sales Off</h3>
                        <h3 class='food-discount'>₱$img_price</h3>
                    </div>
                    <div class='food-qty'>
                        <h4>Quantity:</h4>
                        <input type='number' name='add_subtract' class='food-input-qty' value='1' min='1' max='100'>
                    </div>
                    <div class='food-buy-btn'>
                        <input type='hidden' name='name_foods' value='$hidden_name'>
                        <input type='hidden' name='price_foods' value='$hidden_price'>
                        <input type='hidden' name='img_foods' value='$hidden_img'>
                        <button name='add_to_foods' class='food-btn'>Add To Cart</button>
                    </div>
                </div>
            "; 
            echo $element;
        }


        // GETTING THE DETAILS OF FOODS

        public function foods_display($img_path,$img_name,$img_price,$hidden_name,$hidden_price,$hidden_img) {
            $element = "
                <div class='food-box'>
                    <div class='food-img'>
                        <img src='images/foods/$img_path' alt='FOODS'>
                    </div>
                    <div class='food-name'>
                        <h3>$img_name</h3>
                        <h5>Lorem, ipsum dolor sit amet consectetur adipisicing.</h5>
                    </div>
                    <div class='food-price'>
                        <h3 class='food-discount'>₱$img_price</h3>
                    </div>
                    <div class='food-qty'>
                        <h4>Quantity:</h4>
                        <input type='number' name='add_subtract' class='food-input-qty' value='1' min='1' max='100'>
                    </div>
                    <div class='food-buy-btn'>
                        <input type='hidden' name='name_foods' value='$hidden_name'>
                        <input type='hidden' name='price_foods' value='$hidden_price'>
                        <input type='hidden' name='img_foods' value='$hidden_img'>
                        <button name='add_to_foods' class='food-btn'>Add To Cart</button>
                    </div>
                </div>
            "; 
            echo $element;
        }


        //*******  THIS IS TO FILTER THE DATA IN FOODS.php *** */

        public function foods_data() {

            if(isset($_POST['request'])) {
                $request = $_POST['request'];
                $conn = $this->conn();
                $sql = "SELECT * FROM foods where category='$request' ORDER BY sales DESC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $getData = $stmt->fetchAll();
                $result = $stmt->rowCount();

                if($result > 0) {
                    return $getData;
                }
            }
                
        }
            


        // Create an order from a customer
        public function set_order() {
                if(isset($_POST['btn_foods_smt'])) {
                    $name_foods = $_POST['name_foods'];
                    $name = $_POST['name'];
                    $total = $_POST['total'];
                    $name_foods = implode(",", $name_foods);

                    $conn = $this->conn();
                    $sql = "INSERT INTO order_of_foods(name, name_foods, total_foods) VALUES(?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$name, $name_foods, $total]);
                    echo "<script>alert('Your order is confirmed. Thank You for ordering')</script>";
                    unset($_SESSION['foods']);
                }
        }

        // deleting the row of data in data table
        public function delete_tr_data() {
                if(isset($_POST['delete_tr'])){
                    foreach($_SESSION['foods'] as $key => $value) {
                        
                        if($value['name_foods'] == $_POST['name_food']) {
                            unset($_SESSION['foods'][$key]);
                            $_SESSION['foods'] = array_values($_SESSION['foods']);
                        }
                    }
                }
        }

        public function get_order($id) {
            $conn = $this->conn();
            $sql = "SELECT * FROM foods WHERE ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $getData = $stmt->fetchAll();
            $result = $stmt->rowCount();
        }
}