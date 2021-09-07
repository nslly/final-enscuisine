<?php require_once("includes/classes.php"); 
    
?>
<?php 
    $cuisine = new Doing();
    $info = $cuisine->get_info();
    $getData = $cuisine->getting_data();
    $cart_foods = $cuisine->get_foods_cart();
    $delete = $cuisine->delete_tr_data();
    $order = $cuisine->set_order();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="images/logo.png">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />                  
    <script type="text/javascript" src="js/Jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <style>



    .hero {
        background: url("images/background-hero-2.jpg");
        width:100%;
        height: 90vh;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        position:relative;
        z-index: 100;
    }

    .hero::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(179deg,rgba(250, 250, 250, 0.425),rgba(255, 65, 85, 0.3));
        z-index: -1;
    }

    .reserved-container  {
        background: url("images/cafe-3.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        position:relative;
        z-index: 1;
        margin-top: 2.2rem;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.123);
        height: 40rem;
        opacity: 0.841;   
    }

    .reserved-container::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(179deg,rgba(250, 250, 250, 0.425),rgba(255, 65, 85, 0.3));
        z-index: -1;
    }


    .login-form-container {
        background: url("images/maps-text.jpg");
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        position:relative;
        z-index: 100;
    }

    .login-form-container::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(179deg,rgba(250, 250, 250, 0.425),rgba(255, 65, 85, 0.3));
        z-index: -1;
        
    }
    
    


    .review-1 {
        background-image: url('images/review-1.jpg');
    }
    .review-2 {
        background-image: url('images/review-2.jpg');
    }
    .review-3 {
        background-image: url('images/review-3.jpg');
    }
    .reviewed-img {
    width: 6rem;
    height: 5.5rem;
    background-repeat: no-repeat;
    background-size:cover;
    background-position:center;
    border-radius: 50%;
    }

    .reserve-top-img {
        background-image: url('images/reserve-img-3.jpg');
        width:100%;
        background-position:center;
        background-size:cover;
        position:relative;
        z-index: 100;
        height: 9vh;
    }
    .reserve-top-img::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(199deg,rgba(250, 250, 250, 0.425),rgba(255, 65, 85, 0.5));
        z-index: -1;
    }

    @media screen and (max-width: 778px){ 
        .hero {
            height: 75vh;
        }
    }


    @media screen and (max-width: 685px){ 
        .hero {
            height: 55vh;
        }
    }

    @media screen and (max-width: 552px){ 
        .hero {
            height: 80vh;
        }
    }



    
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Recursive&family=Uchen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
    <title>EnsCuisine</title>
</head>
<body>

